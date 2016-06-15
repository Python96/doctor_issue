<script>
    function sendform() {
        document.getElementById("del").click();
        window.location.assign("http://localhost:8080/progetti/doctor_issue/");
    }
</script>
<?php
/* impostiamo la query e cerchiamo solo le amiche donne... */
$sqlquery = "SELECT * FROM issue";
$result = mysql_query($sqlquery);
$number = mysql_num_rows($result);

$i = 0;
if ($number <= 0) {
    print "<center><p class=\"alert alert-danger\"><i class=\"glyphicon glyphicon-info-sign\"></i> La ricerca non ha prodotto nessun risultato</p></center>";
} else {

    while ($number > $i) {
        $id_issue = mysql_result($result, $i, "id_issue");
        $tipology = mysql_result($result, $i, "tipology");
        $name_issue = mysql_result($result, $i, "name_issue");
        $description = mysql_result($result, $i, "description");
        $incarico = mysql_result($result, $i, "incarico");
        if ($tipology == "Danger") {
            $tipology = '<span class="label label-danger">Danger</span> ';
        }
        if ($tipology == "Medium") {
            $tipology = '<span class="label label-warning">Medium</span> ';
        }
        if ($tipology == "Low") {
            $tipology = '<span class="label label-success">Low</span> ';
        }
        echo ' 
    
                    <tbody>
                        <tr>
                            <td>' . $i . '</td>
                            <td>' . $tipology . '</td>
                            <td>' . $name_issue . '</td>
                            <td>' . $description . '</td>
                            <td>' . $incarico . '</td>
                            <td>
                                <form method="post">
                                    <input type="submit" id="del" name="del"/>
                                        <a href="" class="link">
                                            <i onclick="sendform();"class="glyphicon glyphicon-trash"></i>
                                        </a>
                                <form>
                            </td>
                        </tr>
                        
                    </tbody>';

        $i++;
    }
include 'include/delete_function.php';
}
?>