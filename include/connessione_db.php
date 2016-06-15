<?php

/*Dichiaro le variabili neccessarie al collegamento, con il database*/
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'doctor_issue';
/*----Fine dichiarazione----*/

/*Verifico che i dati d'accesso siano corretti*/
$db = mysql_connect($host, $user, $password) or die ("Impossibile connettersi a: $host");
/*----Fine verifica----*/

/*Instauro la connessione al database*/
mysql_select_db($database, $db) or die ("Impossibile connettersi al database");
/*----Fine connessione----*/
?>