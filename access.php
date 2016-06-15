<html>
    
    <head>
    
        <?php
            # ------------------------ #
            # Author: Antonio Rossetti #
            # Creato il 01/06/2016     #
            # ------------------------ #
        ?>
        <title>
            Gestionale
        </title>
        <link sizes="32x32" href="../wp-content/uploads/2015/11/cropped-tools-24220_640-32x32.png" rel="icon">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/css_personali/home.css" rel="stylesheet">
        <script src="js/invialogin.js"></script>
        <!-- meta per ie compatibile --> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Implemento il viewport -->
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <!-- Fine il viewport -->
    
    </head>
    
    <body>
        <!-- Start header --> 
        <header>
            <img class="img img-responsive" src="../wp-content/uploads/2016/02/logo-zio.png">
        </header>
        <!-- Finish header --> 

        <section>
            <form method="POST" id="login-form" action="login.php">
                 <!-- User --> 
                <label class="sr-only" for="inputEmail">username</label>
                <input id="inputEmail" class="form-control" type="text" autofocus="" required="required" placeholder="Username" name="username" value="">
              
                <br>
                 <!-- Password --> 
                <label class="sr-only" for="inputPassword">Password</label>
                <input id="inputPassword" class="form-control" type="password" required="required" name="password" placeholder="Password">
                <br>
                
                <div class="checkbox">
                    <input type="hidden" name="submit" id="invia" value="invia">
                    <button class="btn btn-lg btn-primary " id="login" onclick="invialogin()" type="submit">Log in</button>
                    <button class="btn btn-lg btn-warning " id="reg_button" onclick="showreg()" type="submit">Registrati</button>
                    <br>
                </div> 
                
            </form>
            <form name="form_registration" id="registration-form" method="post" action="registration.php">
                <label class="sr-only" for="inputEmail">username</label>
                <input id="inputEmail" class="form-control" type="text" autofocus=""  placeholder="Username" name="username_reg" value="">
              
                <br>
                 <!-- Password --> 
                <label class="sr-only" for="inputPassword">Password</label>
                <input id="inputPassword" class="form-control" type="password"  name="password_reg" placeholder="Password">
                <br>
                <label class="sr-only" for="inputEmail">email</label>
                <input id="inputEmail" class="form-control" type="text" autofocus="" r placeholder="E-mail" name="email_reg" value="">
                <br/>
                <input type="hidden" name="registra" id="registrazione" value="registrati">
                <button class="btn btn-lg btn-warning " onclick="registrati()" id="reg_button" type="submit">Registrati</button>
                <button class="btn btn-lg btn-primary " id="login" onclick="showlogin()" type="button">Torna al Log in</button>

            </form>
        </section>
    
    </body>
</html>