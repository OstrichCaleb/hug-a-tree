<?php
    class Admin extends User
    {
        function __construct($username, $password)
        {
            parent::__construct($username, $password);
        }
        
        // Delete a specific user from the database
        function deleteUser($username)
        {
            
        }
        
        // Change a users password
        function changeUserPassword($username, $password)
        {
            
        }
    }