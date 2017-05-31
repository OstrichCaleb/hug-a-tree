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
    }