<?php
    /**
     * This is a class that allows you to create a user for the hug a tree site
     *
     * @author Caleb Ostrander and Duck Nguyen
     * @version 1.0
     */
    class User
    {
        protected $username;
        protected $password;
        protected $id;
        
        
        /**
         * A constructor for the User class setting all the basic information
         * for a user
         *
         * @param Usernmane
         * @param Password
         * @param id
         */
        function __construct($username = 'NA', $password = 'NA', $id = -1)
        {
            $this->username = $username;
            $this->password = $password;
            $this->id = $id;
        }
        
        /**
         * A getter for their username
         *
         * @return Their User
         */
        public function getUsername()
        {
          return $this->username;
        }
      
        /**
         * A setter for their id
         *
         * @param Their ID
         */
        public function setUsername($username)
        {
          $this->username = $username;
        }
      
      /**
         * A getter for their password
         *
         * @return Their pass
         */
        public function getPassword()
        {
          return $this->password;
        }
      
        /**
         * A setter for their paass
         *
         * @param Their pass
         */
        public function setPassword($password)
        {
          $this->password = $password;
        }
        
        /**
         * A setter for their ID
         *
         *@param Their ID
         */
        function setId($id)
        {
            $this->id = $id;
        }
        
        /**
         * A getter for their id
         *
         * @return Their ID
         */
        function getId()
        {
            return $this->id;
        }
        
        /**
         * A getter for their id
         *
         * @return 0
         */
        function getType()
        {
            return 0;
        }
    }