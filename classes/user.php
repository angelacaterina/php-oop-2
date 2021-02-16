<?php

    /** Users class
     * @author Angela Caterina Gallo angela@gmail.com
     * @copyright 2021 Angela
    */
    class User{
        public $name;
        public $lastname;
        public $age;
        public $city;
        public $nationality;

        public function __construct( string $name,  string $lastname,  int $age){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
        }
    }
?>