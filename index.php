<?php

    include "constant/intro_const.php";
    include "constant/game_const.php";
    include "functions.php";

    // DEBUT DU JEUX // 

    $line = "----------------------------------------------------------------------------------\n";

    echo $line;
    echo INTRO_1;
    echo INTRO_2;
    echo $line;
    echo INTRO_3;
    echo $line;

    $name = readline(INTRO_NAME);
    $pseudo = readline(INTRO_PSEUDO);
    $age = age(INTRO_AGE);
    $gender = gender(INTRO_GENDER);


    $player = verif_user($name, $pseudo, $age, $gender);

    // Start

    echo "Ok {$player['name']}\n";
    echo $line;
    echo GAME_START;
    echo GAME_CHOICE;
    echo $line;
    echo GAME_START_CHOICE_1;
    echo GAME_START_CHOICE_2;
    echo GAME_START_CHOICE_3;
    echo $line;

    $choice = readline();

    echo choice($choice);




    

?>