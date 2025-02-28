<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    function generaPasswordSicura() {
        
        if (isset($_POST ["username"])) {
            $username = $_POST ["username"];

            if (isset($_POST ["pwlen"])) {
                $pwlen = $_POST ["pwlen"];
            } else {
                echo "<alert>Invalid password!</alert>";
            }
        } else {
            echo "<alert>Invalid username!</alert>";
        }
    
        $uppercase = range('A', 'Z');                  // A-Z
        $lowercase = range('a', 'z');                  // a-z
        $digits = range('0', '9');                     // 0-9
        $specials = array_map('chr', range(33, 47)) +  // ! " # $ % & ' ( ) * + , - . /
                    array_map('chr', range(58, 64)) +  // : ; < = > ? @
                    array_map('chr', range(91, 96)) +  // [ \ ] ^ _ `
                    array_map('chr', range(123, 126)); // { | } ~
    
        $alphabet = array_merge($uppercase, $lowercase, $digits, $specials);
    
        $password = [];
    
        $password[] = $uppercase[array_rand($uppercase)];
        $password[] = $lowercase[array_rand($lowercase)];
        $password[] = $digits[array_rand($digits)];
        $password[] = $specials[array_rand($specials)];
    
        for ($i = 4; $i < $pwlen; $i++) {
            $password[] = $alphabet[array_rand($alphabet)];
        }
    
        shuffle($password);
    
        return implode('', $password);
    };
    
    echo "<h1>" . generaPasswordSicura() . "</h1>";
?>  
</body>
</html>