<?php

// <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


 $name = $_GET["name"];
 $mail = $_GET["mail"];
 $age = $_GET["age"];
 $message = "";


 if (empty($name) || empty($mail) || empty($age)) {

   $message = "Errore";
  } elseif (strlen($name) <= 3) {

    $message = "Accessso Negato!";
  } elseif (strpos($mail, "@") === false || strpos($mail, ".") === false) {

    $message = "Accessso negato";
  } elseif (!is_numeric($age)) {

    $message = "Accessso Negato";
  } else {

    $message = "Accessso Riuscito";
  }

  echo $message;


 ?>
