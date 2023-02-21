<?php

// Controllo che sia stata passata una lunghezza valida
$password = '';
if (isset($_GET['lunghezza'])) {
    $lunghezza = (int)$_GET['lunghezza'];
    $password = genera_password($lunghezza);

  } else {
    $password = '';
  }

function genera_password ($lunghezza) {
     // Caratteri possibili per la password
      $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-=+{}[]';

     // Genero la password casuale
       $password = '';
       for ($i = 0; $i < $lunghezza; $i++) {
       $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }

    return $password;
}

?>