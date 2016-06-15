<html>
    <head>
        <link href="../../css/home/home.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../../image/siringa.ico">
        <script src="../../js/jquery.js"></script>
        <script>
            function sendform() {
                document.getElementById("invia").click();
            }
        </script>
        <title>Doctor Issue | Insert Bug</title>
    </head>
    <body>
        <div class="content" >
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../../index.php">
                            <p>DOCTOR ISSUE</p>
                        </a>
                        <ul class="nav navbar-nav">
                      <li> <a href=""><i class="glyphicon glyphicon-pencil"></i> Add bug</a></li>
                            <!--                    <li><a href="#">Link</a></li>
                                                <li><a href="#">Issue</a></li>-->
                        </ul>
                      

                    </div>
                </div>
            </nav>
            <div class="table-issue">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="glyphicon glyphicon-fire"></i>  Bug Tracker  > Add bug </div>
                    <div class="panel-body">
                        <?php
                        /*
                         * To change this license header, choose License Headers in Project Properties.
                         * To change this template file, choose Tools | Templates
                         * and open the template in the editor.
                         */
                        include '../../include/insert_function.php';
                        ?>
                        <form method="POST">
                            <div  class="form-group">
                                <label>Gravità</label>  
                                <br /><br/>                            
                                <select name="tipology" class="form-control">
                                    <option>Danger</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                            <div  class="form-group">
                                <label>Nome bug</label>
                                <br /><br/> 
                               <input type="text" id="search" name="name_issue" class="dataTables_filter form-control" placeholder="Nome bug">
                            </div>
                            <div  class="form-group">
                                <label>Descrizione</label>
                                <br /><br/>
                                <input type="text" id="search" name="description" class="dataTables_filter form-control" placeholder="Descrizione">
                            </div>
                            <div  class="form-group">
                                <label>Incaricato</label>
                                <br />
                                <select name="incarico" class="form-control">
                                    <option>Da assegnare</option>
                                    <option>Marco Sartor</option>
                                    <option>Antonio Rossetti</option>
                                    <option>Paolo Da Ponte</option>
                                    <option>Stampher Matthias</option>
                                    <option>Michael Swinbacher</option>
                                </select>
                            </div>    
                            
                                <div class="btn btn-danger" onclick="sendform();" id="co"> Invia</div>
                                <input type="submit" id="invia" name="send" >
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



