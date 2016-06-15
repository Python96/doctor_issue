<div class="content" >
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <p>DOCTOR ISSUE  | </p>
                </a>
                <ul class="nav navbar-nav">
                    <li> <a href="themes/first_version/insert_bug.php" target="_blank"><i class="glyphicon glyphicon-pencil"></i> Add bug</a></li>
                    <!--                  <li><a href="#">Link</a></li>
                                        <li><a href="#">Issue</a></li>-->
                </ul>
                <ul class="nav navbar-nav right">
                </ul>
            </div>
        </div>
    </nav>
    <div class="table-issue">
        <div class="panel panel-primary">
            <div class="panel-heading"><i class="glyphicon glyphicon-fire"></i>  Bug Tracker 
                <form class="navbar-form navbar-right" >
                    <div  class="form-group">
                        <input type="text" id="search" class="dataTables_filter form-control" placeholder="Search">
                    </div>
                </form> 
            </div>
            <div class="panel-body">

                <table id="tblData"class="table table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Gravità</th>
                            <th>Nome errore</th>
                            <th>Description</th>
                            <th>Incaricato</th>
                            <th>Elmina</th>
                        </tr>
                    </thead>
                    <?php
                    include '/template_table.php';
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>