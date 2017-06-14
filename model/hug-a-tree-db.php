<?php

// Access the required creditials
require '/home/costrander/hug-config.php';

    /**
     * Provides CRUD acces
     *
     * PHP Version 5
     *
     * @author Duck Nguyen
     * @author Caleb Ostrander 
     * @version 1.0
     */
    
    /*
     * A database class that will allow our controller
     * to access and use our database.
     */
    class HugATreeDB
    {
        private $_pdo;
        
        function __construct()
        {
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
        
        // Create a new entry
        function addEntry($entry)
        {
            $insert = 'INSERT INTO entries (title, description, warning, location)
                                    VALUES (:title, :description, :warning, :location)';
            
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':title', $entry->getTitle(), PDO::PARAM_STR);
            $statement->bindValue(':description', $entry->getDescription(), PDO::PARAM_STR);
            $statement->bindValue(':warning', $entry->getWarning(), PDO::PARAM_STR);
            $statement->bindValue(':location', $entry->getLocation(), PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        
        }
        
        // Add options to an entry
        function addEntryOption($id, $opts)
        {
            $insert = 'INSERT INTO entry_options (entry_id, opt_id) VALUES (:entry, :opt)';
            
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':entry', $id, PDO::PARAM_INT);
            
            foreach ($opts as $opt)
            {
                $optId = $this->getOptionId($opt);
                $statement->bindValue(':opt', $optId, PDO::PARAM_INT);
                $statement->execute();
            }        
        }
        
        // Add types to an entry
        function addEntryType($id, $types)
        {
            $insert = 'INSERT INTO entry_types (entry_id, type_id) VALUES (:entry, :type)';
            
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':entry', $id, PDO::PARAM_INT);
            
            foreach ($types as $type)
            {
                $typeId = $this->getTypeId($type);
                $statement->bindValue(':type', $typeId, PDO::PARAM_INT);
                $statement->execute();
            }        
        }
        
        // Get option id for adding to entry_options
        function getOptionId($option)
        {
            $select = "SELECT options_id FROM options WHERE description = :option";
                            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':option', $option, PDO::PARAM_STR);
            $statement->execute();
            
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            
            return $row['options_id'];
        }
        
        // Get type id for adding to entry_options
        function getTypeId($type)
        {
            $select = "SELECT type_id FROM types WHERE type = :type";
                            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':type', $type, PDO::PARAM_STR);
            $statement->execute();
            
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            
            return $row['type_id'];
        }
        
        // Get all the options
        function getOptions()
        {
            $select = "SELECT * FROM options";
                            
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            // create an array of blogger objects
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[] = $row['description'];
            }            
            return $resultsArray;
        }
        
        // Get all the types
        function getTypes()
        {
            $select = "SELECT * FROM types";
                            
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[] = $row['type'];
            }
            
            return $resultsArray;
        }
        
        function getMostRecent()
        {
            $select =  "SELECT * FROM entries";
            
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            // create an array of blogger objects
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $act = new Activity($row['title'], $row['description'], $row['location'], $row['warning']);
                $act->setPictures($this->getEntryPhotos($row['entry_id']));
                $act->setOptions($this->getEntryOptions($row['entry_id']));
                
                $resultsArray[] = $act;
            }
            
            return $resultsArray;
        }
        
        function getHikes()
        {
            $select =  "SELECT * FROM entries WHERE entry_id = :id";
            
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            // create an array of blogger objects
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $act = new Activity($row['title'], $row['description'], $row['location'], $row['warning']);
                $act->setPictures($this->getEntryPhotos($row['entry_id']));
                $act->setOptions($this->getEntryOptions($row['entry_id']));
                
                $resultsArray[] = $act;
            }
            
            return $resultsArray;
        }
        
        function getEntryPhotos($id)
        {
            $select = "SELECT link FROM pictures WHERE entry_id = :id";
            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            return $row;
        }
        
        function getEntryOptions($id)
        {
            $select = "SELECT opt_id FROM entry_options WHERE entry_id = :id";
            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            $resultsArray = array();
            
            foreach ($row as $opt){
                $resultsArray = $this->getOptionDescription($opt);
            }
            
            return $resultsArray;
        }
        
        function getOptionDescription($id)
        {
            $select = "SELECT description FROM options WHERE options_id = :id";
            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
            
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            
            return $result;
        }
        
        // Delete an entry based on that entries id
        function deleteEntry($entryId)
        {
            
        }
        
        // Get a specific entry based on its id
        function getEntry($entryId)
        {
            
        }
        
        // Get an array of all entries that match the correct type of activity
        function getAllEntries($type)
        {
            
        }
        
        // Remove an entry from a specific type of activity (Say it was in hiking and
        // biking, now only have it be in hiking)
        function removeFromType($entryId, $type)
        {
            
        }
        
        // Add a new user
        function addUser($user)
        {
            
        }
        
        // Delete a user based on their username
        function deleteUser($username)
        {
            
        }
        
        // Change a users password based on their username
        function changePassword($username, $password)
        {
            
        }
    }