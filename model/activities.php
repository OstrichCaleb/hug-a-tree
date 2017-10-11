<?php
/**
     * This is a class that allows you to create an activity for the hug a tree site
     *
     * @author Caleb Ostrander and Duck Nguyen
     * @version 1.0
     */
    class Activity
    {
        protected $main_title;
        protected $description;
        protected $location;
        protected $warning;
        protected $options = array();
        protected $picture;
        protected $sub_title;
        protected $type;
        
        /**
         * A constructor for the activity class setting all the basic information
         * for an activity
         *
         * @param main title
         * @param dexcription
         * @param location
         * @param warning
         * @param sub title
         * @param picture
         * @param option
         * @param type
         */
        function __construct($main_title, $description, $location, $warning = "", $sub_title="", $picture = "", $options = "", $type = "NA")
        {
            $this->main_title = $main_title;
            $this->description = $description;
            $this->location = $location;
            $this->warning = $warning;
            $this->options = $options;
            $this->picture = $picture;
            $this->sub_title = $sub_title;
            $this->type = $type;
        }
        
        /**
         * A getter for their title
         *
         * @return The title
         */
        public function getMainTitle()
        {
          return $this->main_title;
        }
      
        /**
         * A setter for the title
         *
         * @param The title
         */
        public function setMainTitle($title)
        {
          $this->main_title = $title;
        }
        
        /**
         * A getter for their sub title
         *
         * @return Their sub title
         */
        public function getSubTitle()
        {
          return $this->sub_title;
        }
      
      /**
         * A setter for the sub title
         *
         * @param The sub title
         */
        public function setSubTitle($title)
        {
          $this->sub_title = $title;
        }
      
      /**
         * A getter for their description
         *
         * @return The description
         */
        public function getDescription()
        {
          return $this->description;
        }
      
      /**
         * A setter for the description
         *
         * @param The description
         */
        public function setDescription($description)
        {
          $this->description = $description;
        }
      
        /**
         * A getter for the location
         *
         * @return The location
         */
        public function getLocation()
        {
          return $this->location;
        }
      
      /**
         * A setter for the location
         *
         * @param The location
         */
        public function setLocation($location)
        {
          $this->location = $location;
        }
      
        /**
         * A getter for the warning
         *
         * @return The warning
         */
        public function getWarning()
        {
          return $this->warning;
        }
      
      /**
         * A setter for the warnign
         *
         * @param The warning
         */
        public function setWarning($warning)
        {
          $this->warning = $warning;
        }
      
        /**
         * A getter for the options
         *
         * @return The options
         */
        public function getOptions()
        {
          return $this->options;
        }
      
      /**
         * A setter for the options
         *
         * @param The options
         */
        public function setOptions($options)
        {
          $this->options = $options;
        }
        
        /**
         * A getter for the pic
         *
         * @return The pic
         */
        public function getPicture()
        {
          return $this->picture;
        }
      
      /**
         * A setter for the pic
         *
         * @param The pic
         */
        public function setPicture($picture)
        {
          $this->picture = $picture;
        }
        
        /**
         * A getter for the type
         *
         * @return The type
         */
        public function getType()
        {
          return $this->type;
        }
      
      /**
         * A setter for the type
         *
         * @param The type
         */
        public function setType($type)
        {
          $this->type = $type;
        }
    }
    