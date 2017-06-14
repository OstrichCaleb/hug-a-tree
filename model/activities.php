<?php
    class Activity
    {
        private $_title;
        private $_description;
        private $_location;
        private $_warning;
        private $_options = array();
        private $_pictures = array();
        
        function __construct($title, $description, $location, $warning = "", $pictures = "", $options = "")
        {
            $this->_title = $title;
            $this->_description = $description;
            $this->_location = $location;
            $this->_warning = $warning;
            $this->_options = $options;
            $this->_pictures = $pictures;
        }
        
        public function getTitle()
        {
          return $this->_title;
        }
      
        public function setTitle($title)
        {
          $this->_title = $title;
        }
      
        public function getDescription()
        {
          return $this->_description;
        }
      
        public function setDescription($description)
        {
          $this->_description = $description;
        }
      
        public function getLocation()
        {
          return $this->_location;
        }
      
        public function setLocation($location)
        {
          $this->_location = $location;
        }
      
        public function getWarning()
        {
          return $this->_warning;
        }
      
        public function setWarning($warning)
        {
          $this->_warning = $warning;
        }
      
        public function getOptions()
        {
          return $this->_options;
        }
      
        public function setOptions($options)
        {
          $this->_options = $options;
        }
      
        public function getPictures()
        {
          return $this->_pictures;
        }
      
        public function setPictures($pictures)
        {
          $this->_pictures = $pictures;
        }
    }
    