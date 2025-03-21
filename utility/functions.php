<?php
    function generaPasswordSicura() {

        if (($_POST ["username"] != "") && (($_POST ["pwlen"] >= 6) && ($_POST ["pwlen"] <= 20))) {
            $username = $_POST ["username"];
            $pwlen = $_POST ["pwlen"];

            $uppercase = range('A', 'Z');                  // A-Z
            $lowercase = range('a', 'z');                  // a-z
            $digits = range('0', '9');                     // 0-9
            $specials = array_map('chr', range(33, 47)) +  // ! " # $ % & ' ( ) * + , - . /
                        array_map('chr', range(58, 64)) +  // : ; < = > ? @
                        array_map('chr', range(91, 96)) +  // [ \ ] ^ _ `
                        array_map('chr', range(123, 126)); // { | } ~
        
            $alphabet = [];

            if(isset($_POST ["lowercase"])) {
                $checkLower = true;
                $alphabet = array_merge($alphabet, $lowercase);
            } else {
                $checkLower = false;
            }
            if(isset($_POST ["uppercase"])) {
                $checkUpper = true;
                $alphabet = array_merge($alphabet, $uppercase);
            } else {
                $checkUpper = false;
            }
            if(isset($_POST ["digits"])) {
                $checkDigits = true;
                $alphabet = array_merge($alphabet, $digits);
            } else {
                $checkDigits = false;
            }
            if(isset($_POST ["specials"])) {
                $checkSpecials = true;
                $alphabet = array_merge($alphabet, $specials);
            } else {
                $checkSpecials = false;
            }
        
            $password = [];
                    
            for ($i = 0; $i < $pwlen; $i++) {
                $password[] = $alphabet[array_rand($alphabet)];
            }
        
            shuffle($password);
        
            return implode('', $password);

        } else {
            echo "<p>INVALID DATA !!!</p>";
        }
    };
    echo "<h1 id='password-text'>" . generaPasswordSicura() . "</h1>";
?>