<?php

function Header_HTML()
{
?>
    
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>MegaCasting</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="style/css.css" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>

        <body>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">MegaCasting</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class='glyphicon glyphicon-home' href="index.php"></a></li>
                            <li><a href="About.php">A propos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="Connexion.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>

<?php     
}
function Header_HTML_Connecte()
{
?>
    
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>MegaCasting</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="style/css.css" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
            
        </head>

        <body>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">MegaCasting</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class='glyphicon glyphicon-home' href="AccueilPartenaire.php"></a></li>
                            <li><a href="Profil.php">Profil</a></li>
                            <li><a href="Flux.php" target=_blank>Flux</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="Deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Se deconnecter</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>

<?php     
}
?>