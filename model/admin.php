<?php
    class Admin extends User
    {
        protected $type;
        
        function __construct($username, $password, $id, $type = 1)
        {
            parent::__construct($username, $password, $id);
            $this->type = $type;
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