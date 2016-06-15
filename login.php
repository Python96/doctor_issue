<?php
# ------------------------ #
# Author: Antonio Rossetti #
# Creato il 01/06/2016     #
# ------------------------ #

//Avvio la sessione 
session_start();

// Variabile che conterrà gli errori
$error = '';

// Se viene premuto l'input di submit
if (isset($_POST['submit'])) {

    // e lo username e la password sono vuoti restituisce un errore    
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }

    // altrimenti inzia il ciclo di login
    else {

        // Definisco lo $username e la $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Eseguo la connesione al database
        $connection = mysql_connect("localhost", "root", "");

        // Implemento la sicurezza per  MySQL injection
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        // Fine dei protocolli di sicurezza

        // Seleziono il Database
        $db = mysql_select_db("doctor_issue", $connection);

        // Trami una sql query utilizzo un  fetch information per prendere
        // le credenziali d'accesso.
        $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);

        //se i dati nel database corrispondono ai dati inseriti dall'utente
        // procedi con il login
        if ($rows == 1) {
            
            $_SESSION['login_user'] = $username;
            // redirezione alla pagina principale della dashboard
            header("location: index.php"); 
        }

        // altrimenti stampa un errore
        else {
            $error = "Username or Password is invalid";
            echo $error;
        }
        
        //chiudo la connessione al database
        mysql_close($connection); 
    }
}
?>