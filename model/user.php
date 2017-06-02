<?php
    class User
    {
        protected $username;
        protected $password;
        
        function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
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
        
        // Create a new user by passing the object
        function addUser($user)
        {
          
        }
        
        // Change a users password using their username
        function changePassword($user)
        {
          
        }
    }