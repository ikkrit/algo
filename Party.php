<?php

    class Party
    {
        public $id;
        public $name;
        public $party;
        public $score;
        public $created_at;

        public function __construct(int $id, string $name, int $party, int $score, string $created_at)
        {
            $this->id = $id;
            $this->name = $name;
            $this->party = $party;
            $this->score = $score;
            $this->created_at = $created_at;
        }

        public function definition()
        {
            echo "L'id est : {$this->id}, sous le nom de : {$this->name} de la party : {$this->party} avec un score de {$this->score} et créer le : {$this->created_at}";
        }

        
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getParty()
        {
                return $this->party;
        }

        public function setParty($party)
        {
                $this->party = $party;

                return $this;
        }

        public function getScore()
        {
                return $this->score;
        }

        public function setScore($score)
        {
                $this->score = $score;

                return $this;
        }

        public function getCreated_at()
        {
                return $this->created_at;
        }

        public function setCreated_at($created_at)
        {
                $this->created_at = $created_at;

                return $this;
        }
    }

?>