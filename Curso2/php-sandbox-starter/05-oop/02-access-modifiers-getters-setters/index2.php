<?php

    class User {
        
        private $name;
        private $age;
   

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        //__get MAGIC METHOD
        public function __get($property) {
            if(property_exists($this, $property)) {
                return $this->$property;
            } else {
                return 'Propriedade não existe';
            }
        }

        //_set MAGIC METHOD
        public function __set($property, $value) {
            if(property_exists($this, $property)) {
                return $this->$property = $value;
        }
        return $this;
        } 
    } 

$user1 = new User('william', 20);


    // $user1->setName('Jorgin do grau');
    // echo $user1->getName();

$user1->__set('name', 'Jorgin do grau matador de perereca');
$user1->__set('age', 20);

echo $user1->__get('name');
echo ' ';
echo $user1->__get('age');