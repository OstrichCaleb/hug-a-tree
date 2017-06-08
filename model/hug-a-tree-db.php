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