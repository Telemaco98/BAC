<!DOCTYPE HTML>
<html lang="pt-BR">

    <head>

        <meta charset="UTF-8" />
        <meta name="description" content="BioME" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>BAC: Body's Anatomy in a Click</title>

        <!-- Icone -->
        <link rel="icon" href="view/images/any/icon.png" type="image/x-icon" />
        <link rel="shortcut icon" href="view/images/any/icon.png" type="image/x-icon" />

        <!-- Link com Bootstrap-CSS -->
        <link rel="stylesheet" href="view/templates/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="view/templates/bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <!-- Link configs personalizadas -->
        <link rel="stylesheet" type="text/css" href="view/css/style.css" />
        <link rel="stylesheet" type="text/css" href="view/css/common.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-history.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-people.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-contact.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-events.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-graduateprogram.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-research.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-services.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-tools.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-news.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-selectedservice.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-selectednew.css" />
        <link rel="stylesheet" type="text/css" href="view/css/style-stop.css" />
        <link rel="stylesheet" type="text/css" href="view/css/themes_odometer/odometer-theme-minimal.css" />

        <!-- Fontes css -->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    </head>


    <body style="background-color: #e8e8e8" onload="timer()">

        <div class="preloader">
            <img class="preloader-img" src="view/images/any/preload.gif" />
        </div>


        <!-- Navbar -->
        <?php include 'includes/navbar.php' ?>
        <!-- Navbar End  -->

        <?php
        switch($_GET['page']){
        	case 'cadastro':
        	   include 'includes/cadastro.php';
        	   break;
        	case 'sala':
            include 'includes/sala.php';
        	   break;
            case 'quiz':
                include 'includes/quiz.php';
                break;
        	case 'jogo':
        	   include 'includes/jogo.php';
        	   break;
             case 'sobre':
                include 'includes/sobre.php';
                break;
            case 'system01':
                include 'includes/systems/system01.php';
                break;
            case 'system02':
                include 'includes/systems/system02.php';
                break;
            case 'system03':
                include 'includes/systems/system03.php';
                break;
            case 'system04':
                include 'includes/systems/system04.php';
                break;  
            case 'system05':
                include 'includes/systems/system05.php';
                break;
            case 'system06':
                include 'includes/systems/system06.php';
                break;
            case 'system07':
                include 'includes/systems/system07.php';
                break;
            case 'system08':
                include 'includes/systems/system08.php';
                break;
            case 'system09':
                include 'includes/systems/system09.php';
                break;
            case 'system10':
                include 'includes/systems/system10.php';
                break;
            case 'system11':
                include 'includes/systems/system11.php';
                break;
            case 'system12':
                include 'includes/systems/system12.php';
                break;
            case 'quiz01':
                include 'includes/quizes/quiz01.php';
                break;
            case 'jogo01':
                include 'includes/jogos/jogo01.php';
                break;
             default:
        	   include 'includes/initial.php';
        	   break;
            }
            ?>

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>
        <!-- Footer End -->

<!-- ###################################### JS ###################################### -->
        <!-- Link com jQuery -->
        <script src="view/templates/jquery/jquery.min.js"></script>
        <!-- Link com Bootstrap-JS -->
        <script src="view/templates/bootstrap/js/bootstrap.min.js"></script>
        <!-- Link com javascript-->
        <script src="view/js/script.js"></script>
        <script src="view/js/script_others.js"></script>
        <script src="view/js/odometer.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script>
            $(function() {
                Boxgrid.init();
            });
        </script>

        <script type="text/javascript">
          setTimeout(function(){
            odometer1.innerHTML = 39;
            odometer2.innerHTML = 19;
            odometer3.innerHTML = 20;
          }, 1000);
        </script>

    </body>
</html>