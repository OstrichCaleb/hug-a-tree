<?php
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
        
        public function getMainTitle()
        {
          return $this->main_title;
        }
      
        public function setMainTitle($title)
        {
          $this->main_title = $title;
        }
        
        public function getSubTitle()
        {
          return $this->sub_title;
        }
      
        public function setSubTitle($title)
        {
          $this->sub_title = $title;
        }
      
        public function getDescription()
        {
          return $this->description;
        }
      
        public function setDescription($description)
        {
          $this->description = $description;
        }
      
        public function getLocation()
        {
          return $this->location;
        }
      
        public function setLocation($location)
        {
          $this->location = $location;
        }
      
        public function getWarning()
        {
          return $this->warning;
        }
      
        public function setWarning($warning)
        {
          $this->warning = $warning;
        }
      
        public function getOptions()
        {
          return $this->options;
        }
      
        public function setOptions($options)
        {
          $this->options = $options;
        }
        
        public function getPicture()
        {
          return $this->picture;
        }
      
        public function setPicture($picture)
        {
          $this->picture = $picture;
        }
        
        public function getType()
        {
          return $this->type;
        }
      
        public function setType($type)
        {
          $this->type = $type;
        }
    }
    