<?php
    class Activity
    {
        private $_title;
        private $_description;
        private $_location;
        private $_warning;
        private $_options[];
        private $_pictures[];
        
        function __construct($title, $description, $location, $warning = "", $options, $pictures)
        {
            $this->_title = $title;
            $this->_description = $description;
            $this->_location = $location;
            $this->_warning = $warning;
            $this->_options = $options;
            $this->_pictures = $pictures;
        }
        
        public function get_title()
        {
          return $this->_title;
        }
      
        public function set_title($title)
        {
          $this->_title = $title;
        }
      
        public function get_description()
        {
          return $this->_description;
        }
      
        public function set_description($description)
        {
          $this->_description = $description;
        }
      
        public function get_location()
        {
          return $this->_location;
        }
      
        public function set_location($location)
        {
          $this->_location = $location;
        }
      
        public function get_warning()
        {
          return $this->_warning;
        }
      
        public function set_warning($warning)
        {
          $this->_warning = $warning;
        }
      
        public function get_options()
        {
          return $this->_options;
        }
      
        public function set_options($options)
        {
          $this->_options = $options;
        }
      
        public function get_pictures()
        {
          return $this->_pictures;
        }
      
        public function set_pictures($pictures)
        {
          $this->_pictures = $pictures;
        }
    }
    