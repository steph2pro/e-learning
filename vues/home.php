
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>learnHub</title>
    <link rel="icon" type="image/png" sizes="126x126" href="assets/imgs/logo.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="assets/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="assets/css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/index.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

    <style type="text/css">
        .img{
            width: 40px;
            height: 35px;
        }
        *{
        font-family: "Comic Sans MS", cursive;
        }
    </style>
    <?php
    if (isset($_SESSION["msg"])) {
        $message = $_SESSION["msg"];
        unset($_SESSION["msg"]);
        echo "<script>alert('$message');</script>";
    }
    ?>
</head>

<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
   <header class="header" >
        <a href="index.php" class="logo">
           LEARNHUB
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background: dodgerblue;opacity: .7">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                                       <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span><?= $_SESSION['School_User'][0]['nom']?> <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>

                            

                            <li class="divider"></li>

                            

                            <li>
                                <a href="vues/deconnexion.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas" style="background: dodgerblue;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/profiles/<?= $_SESSION['School_User'][0]['photo'] ?>" class="img-circle" alt="User Image" />
                        </div>

                    <div class="pull-left info">
                        <p>Salut, <?= $_SESSION['School_User'][0]['nom']?></p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." />
                        <span class="input-group-btn">
                            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
               

                    <ul class="sidebar-menu">

                <?php
                $active = '';
                if (isset($_GET['p'])) {
                    $active=$_GET['p'];
                }

                if ( $_SESSION['School_User'][0]['role']=="admin") {
                   require_once "menueAdmin.php";

                }
                if ( $_SESSION['School_User'][0]['role']=="enseignant") {
                   
                   require_once "menueEns.php";

                }
                if ( $_SESSION['School_User'][0]['role']=="apprennant") {
                   
                   require_once "menueApp.php";

                }
            ?>

                   

<!-- 
                    <li class="<?php if ($active == 'eleve' ) { echo 'active'; }?>">
                        <a href="?p=eleve">
                            <i class="fa fa-globe"></i> <span>inscription</span>
                        </a>
                    </li>

                    <li class="<?php if ($active == 'classe' ) { echo 'active'; }?>">
                        <a href="?p=classe">
                            <i class="fa fa-glass"></i> <span>classe</span>
                        </a>
                    </li>
                    <li class="<?php if ($active == 'paiement' ) { echo 'active'; }?>">
                        <a href="?p=paiement">
                            <i class="fa fa-glass"></i> <span>paiement</span>
                        </a>
                    </li>

                    <li class="<?php if ($active == 'historique' ) { echo 'active'; }?>">
                        <a href="?p=historique">
                            <i class="fa fa-spinner fa-pulse"></i> <span>Historique</span>
                        </a>
                    </li> -->

                </ul>
                
            </section>
            <!-- /.sidebar -->
        </aside>

        <aside class="right-side">
            <section class="content">
            <?php
                $route = '';
                if (isset($_GET['p'])) {
                    $route=$_GET['p'];
                }
            
                switch ($route) {
                    case 'apprennant':
                        require_once 'apprennant.php';
                        break;
                    case 'apprennantAdd':
                        require_once 'apprennantAdd.php';
                        break;
                    case 'apprennantUpdate':
                        require_once 'apprennantUpdate.php';
                        break;
                    case 'apprennantDelete':
                        require_once 'apprennantDelete.php';
                        break;
                    case 'admin':
                        require_once 'admin.php';
                        break;
                    case 'adminAdd':
                        require_once 'adminAdd.php';
                        break;
                    case 'adminUpdate':
                        require_once 'adminUpdate.php';
                        break;
                    case 'adminDelete':
                        require_once 'adminDelete.php';
                        break;
                    case 'cours':
                        require_once 'cours.php';
                        break;
                    case 'coursAdd':
                        require_once 'coursAdd.php';
                        break;
                    case 'coursUpdate':
                        require_once 'coursUpdate.php';
                        break;
                    case 'coursDelete':
                        require_once 'coursDelete.php';
                        break;
                        
                    case 'formation':
                        require_once 'formation.php';
                        break;
                    case 'formationAdd':
                        require_once 'formationAdd.php';
                        break;
                    case 'formationUpdate':
                        require_once 'formationUpdate.php';
                        break;
                    case 'formationDelete':
                        require_once 'formationDelete.php';
                        break;
                    case 'questionnaire':
                        require_once 'questionnaire.php';
                        break;
                    case 'questionnaireAdd':
                        require_once 'questionnaireAdd.php';
                        break;
                    case 'questionnaireUpdate':
                        require_once 'questionnaireUpdate.php';
                        break;
                    case 'questionnaireDelete':
                        require_once 'questionnaireDelete.php';
                        break;
                    case 'enseignant':
                        require_once 'enseignant.php';
                        break;
                    case 'enseignantAdd':
                        require_once 'enseignantAdd.php';
                        break;
                    case 'enseignantUpdate':
                        require_once 'enseignantUpdate.php';
                        break;
                    case 'enseignantDelete':
                        require_once 'enseignantDelete.php';
                        break;
                    case 'formationApp':
                        require_once 'formationApp.php';
                        break;
                    case 'coursApp':
                        require_once 'coursApp.php';
                        break;
                    case 'quizApp':
                        require_once 'quizApp.php';
                        break;
                    case 'quizRepond':
                        require_once 'quizRepond.php';
                        break;
                    
                    default:
                        require_once 'Dashboard.php';
                        break;
                }
            ?>

                
            </section>
        </aside>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="assets/js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="assets/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="assets/js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="assets/js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function (event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function (event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
        </script>
        <script type="text/javascript">
            $(function () {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
                new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
                    responsive: true,
                    maintainAspectRatio: false,
                });

            });
            // Chart.defaults.global.responsive = true;
        </script>
        <script src="./assets/js/script.js"></script>

        <script src="./assets/js/recherche.js"></script>
</body>

</html>