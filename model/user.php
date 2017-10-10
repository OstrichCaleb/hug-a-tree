<?php
    class User
    {
        protected $username;
        protected $password;
        protected $id;
        
        function __construct($username = 'NA', $password = 'NA', $id = -1)
        {
            $this->username = $username;
            $this->password = $password;
            $this->id = $id;
        }
        
        public function getUsername()
        {
          return $this->username;
        }
      
        public function setUsername($username)
        {
          $this->username = $username;
        }
      
        public function getPassword()
        {
          return $this->password;
        }
      
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
        
        function getType()
        {
            return 0;
        }
        
        // Create a new user by passing the object
        function addUser($user)
        {
          
        }
        
        // Change a users password using their username
        function changePassword($user)
        {
          
        }
    }