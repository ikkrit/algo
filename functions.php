<?php

    // VERIFICATION DE L'AGE

    function age($intro_age)
    {
        $age = readline($intro_age);
        if($age >= 18) {
            return $age;
        } else {
            return false;
        }
    }

    // VERIFICATION DU GENRE

    function gender($intro_gender)
    {
        $gender = strtolower(readline($intro_gender));
        if($gender == "homme" || $gender == "femme" || $gender == "inconnu") {
            return $gender;
        } else {
            return false;
        }
    }

    // PRESENTATION

    function present_user(string $name, string $pseudo, int $age, string $gender)
    {
        $gender == "homme" ? $p = "un" : $p = "une";
        echo "Tu t'appel {$name}, ton pseudo est : {$pseudo}, tu as {$age} ans et tu est {$p} {$gender}\n";
    } 

    // VERIFICATION FINAL

    function verif_user($name, $pseudo, $age, $gender) {
        if(!$age) {
            echo "Ce jeux est pour les 18 ans et plus\n";
            exit("Game over");
        }if(!$gender) {
            echo "Pas compris ton choix...\n";
            exit("Game over");
        } else {
            present_user($name, $pseudo, $age, $gender);
            return $player = ["name" => $name,
                              "pseudo" => $pseudo,
                              "age" => $age,
                              "gender" => $gender];
        }
    }

    // LANCER DE DES

    function dice()
    {
        $dice = rand(1,6);
        return $dice;
    }

    function choice_1($choice)
    {
        switch($choice) {
            case 1:
                return "Tu as choisis la Lumiere";
                break;
            case 2:
                return "Tu as choisis les Tenebre";
                break;
            case 3:
                return "Ok tu t'en fout";
                break;
            default:
                return false;
        }
    }

    function choice_2($choice)
    {
        switch($choice) {
            case 1:
                return "Le combat commence";
                break;
            case 2:
                return "Tu est un lâche, bah tu te barre";
                break;
            case 3:
                return "Bonne etat d'esprit";
                break;
            default:
                return false;
        }
    }

?>