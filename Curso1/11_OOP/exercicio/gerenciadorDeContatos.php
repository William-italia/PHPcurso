<?php

    class Contact {

        public $name;
        public $email;
        public $contact;

        public function __construct($name, $email, $contact)
        {
            $this->name = $name;
            $this->email = $email;
            $this->contact = $contact;
        }

        public function getName() {
            return $this->name;
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function getPhone() {
            return $this->contact;
        }

        public function setEmail($NewEmail) {
            return $this->email = $NewEmail;
        }

        public function setPhone($NewPhone) {
            return $this->contact = $NewPhone;
        }
    }

    $Livia = new Contact("Livia", "livialinda1234@gmail.com", "(15)9944-8833");

    echo "Contato: " . $Livia->getName() . "<br>";
    echo "Telefone: " . $Livia->getPhone() . "<br>";
    echo "Email antigo: " . $Livia->getEmail() . "<br>";
    
    $Livia->setEmail("LiviaFofinha123@outlook.com");
    $Livia->setPhone("(13)777-3333");
    echo "Telefone: " . $Livia->getPhone() . "<br>";
    echo "Email antigo: " . $Livia->getEmail() . "<br>";


?>