<?php

    include "constant/intro_const.php";

    // FUNCTION DU JEUX //

    function age($intro_age)
    {
        $age = readline($intro_age);
        if($age >= 18) {
            return $age;
        } else {
            return false;
        }
    }

    function gender($intro_gender)
    {
        $gender = strtolower(readline($intro_gender));
        if($gender == "homme" || $gender == "femme" || $gender == "inconnu") {
            return $gender;
        } else {
            return false;
        }
    }

    function present_user(string $name, string $pseudo, int $age, string $gender)
    {
        $gender == "homme" ? $p = "un" : $p = "une";
        echo "Tu t'appel {$name}, ton pseudo est : {$pseudo}, tu as {$age} ans et tu est {$p} {$gender}";
    } 

    function verif_user($name, $pseudo, $age, $gender) {
        if(!$age) {
            echo "Ce jeux est pour les 18 ans et plus\n";
            exit("Game over");
        }if(!$gender) {
            echo "Pas compris ton choix...\n";
            exit("Game over");
        } else {
            present_user($name, $pseudo, $age, $gender);
        }
    }

    
    // DEBUT DU JEUX // 

    echo INTRO_1;
    echo INTRO_2;
    echo INTRO_3;

    $name = readline(INTRO_NAME);
    $pseudo = readline(INTRO_PSEUDO);
    $age = age(INTRO_AGE);
    $gender = gender(INTRO_GENDER);

    
    verif_user($name, $pseudo, $age, $gender);
    

?>