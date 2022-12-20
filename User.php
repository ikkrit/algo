<?php

    class user
    {
        public $name;
        public $pseudo;
        public $age;
        public $sex;

        public function __construct(string $name,string $pseudo,int $age, string $sex)
        {
            $this->name = $name;
            $this->pseudo = $pseudo;
            $this->age = $age;
            $this->sex = $sex;

        }

        public function user_description()
        {
            echo "Ton nom est : $this->name, ton pseudo est : $this->pseudo, tu as $this->age et tu est $this->sex";
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

        public function getPseudo()
        {
                return $this->pseudo;
        }

        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

                return $this;
        }

        public function getAge()
        {
                return $this->age;
        }

        public function setAge($age)
        {
            if($age >= 18) {

                $this->age = $age;

                return $this;
            }
            else {

                return false;
            }
        }

        public function getSex()
        {
                return $this->sex;
        }

        public function setSex($sex)
        {
                $this->sex = $sex;

                return $this;
        }
    }

?>