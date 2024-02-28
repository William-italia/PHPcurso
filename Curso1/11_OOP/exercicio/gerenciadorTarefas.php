<?php

    class Task {

        public $title;
        public $description;
        public $completed;

        public function __construct($title, $description, $completed)
        {
            $this->title = $title;
            $this->description = $description;
            $this->completed = $completed;
        }

        public function markAsCompleted() {
            return $this->completed = true;
        }
        
        public function markAsIncomplete() {
            return $this->completed = false;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function isCompleted() {
            return $this->completed;
        }

    }

    $tarefa = new Task("Redes de computadores", "Faça uma pesquisa sobre os cabos utilizados na area.", 1);

    echo "Titulo: "  . $tarefa->getTitle() . "<br>";
    echo "Descrição: " . $tarefa->getDescription() . "<br>";
    echo "Concluída? " . ($tarefa->isCompleted() ? 'Sim' : 'Não') . "\n";




?>