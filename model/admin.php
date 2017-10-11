<?php
/**
     * This is a class that allows you to create an admin for the hug a tree site
     *
     * @author Caleb Ostrander and Duck Nguyen
     * @version 1.0
     */
    class Admin extends User
    {
        protected $type;
        
        /**
         * A constructor for the admin class setting all the basic information
         * for an admin
         *
         * @param type as one for admin
         */
        function __construct($username, $password, $id, $type = 1)
        {
            parent::__construct($username, $password, $id);
            $this->type = $type;
        }
        
        /**
         * A getter for their type
         *
         * @return Their type
         */
        public function getType()
        {
          return $this->type;
        }
      
        /**
         * A setter for their type
         *
         * @param Their type
         */
        public function setType($type)
        {
          $this->type = $type;
        }        
    }