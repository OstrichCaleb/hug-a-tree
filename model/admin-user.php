<?php
    class Dog extends Pet
    {
        protected $breed;
        
        function __construct($name="?", $color="?", $breed="mutt")
        {
            parent::__construct($name, $color);
            
            $this->breed = $breed;
        }
        
        function fetch()
        {
            echo $this->name . " is fetching...<br>";
        }
        
        function talk()
        {
            echo $this->name . " is barking...<br>";
        }
    }