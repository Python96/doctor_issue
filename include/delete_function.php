<?php
/*Start Dell sorgente per la cancellazione dei dati*/
// richiamo lo script responsabile della connessione a MySQL

    if (isset($_POST['del'])) {
        require 'include/connessione_db.php';
// preparo la query
        $query = "DELETE FROM issue WHERE id_issue = '$id_issue'";

// invio la query
        $result = mysql_query($query);

// controllo l'esito
        if (!$result) {
            die("Errore nella query $query: " . mysql_error());
        }

// chiudo la connessione a MySQL
        mysql_close();

        echo 'Query eseguita correttamente';
    }
?>