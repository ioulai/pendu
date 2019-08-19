<?php
$titrePage = "Bienvenue";
$iconPage  = "";
?>
<?php // <editor-fold defaultstate="collapsed" desc="AdminLTE">             
$racine ="./";
?>

    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jeu Pendu</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?=$racine?>public/plugins/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=$racine?>public/plugins/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?=$racine?>public/plugins/AdminLTE/bower_components/Ionicons/css/ionicons.min.css" type="text/css">
<!-- Theme style -->
<link href="<?=$racine?>public/plugins/AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?=$racine?>public/plugins/AdminLTE/dist/css/skins/_all-skins.css" type="text/css">
<link rel="stylesheet" href="<?=$racine?>public/plugins/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" type="text/css">

<?php // </editor-fold>?>

<?php // <editor-fold defaultstate="collapsed" desc="plugins">?>
<!-- iCheck -->


<link rel="stylesheet" href="<?=$racine?>public/plugins/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css" type="text/css">
<link rel="stylesheet" href="<?=$racine?>public/plugins/jQueryUI/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="<?=$racine?>public/plugins/bootstrap-tour-0.12.0/build/css/bootstrap-tour.min.css" type="text/css">
<?php // </editor-fold>?>
    </head>

    <body class="skin-claas sidebar-mini">
        <!--<div class="wrapper">-->
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>J</b>P</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Jeu</b> Pendu </span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>                
            </nav>
        </header>
    </body>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
            <li class="treeview " >
                <a href="#"><i class="fa fa-check-square-o"></i> <span>Administration</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" >
                    <li><a href="vue/theme.php" ><span>Theme </span></a></li>
                    <li><a href="vue/mot.php"><span>Mot </span></a></li>                    
                </ul>
            </li>
            <li class=""><a href="vue/jeu.php"><i class="fa fa-line-chart"></i> <span>Jeu</span></a></li>
        
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa <?= $iconPage ?>"></i> <?= $titrePage ?>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="box">
                    <div class="box-header">

                    </div>

                    <div class="box-body">







                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php // <editor-fold defaultstate="collapsed" desc="AdminLTE">                             ?>
<!-- jQuery 3 -->

<script src="<?=$racine?>public/plugins/jQuery/jQuery-2.2.0.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=$racine?>public/plugins/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=$racine?>public/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?=$racine?>public/plugins/AdminLTE/dist/js/adminlte.min.js" type="text/javascript"></script>

<script src="<?=$racine?>public/plugins/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>

<?php // </editor-fold>?>


<?php // <editor-fold defaultstate="collapsed" desc="plugins">?>
<!-- iCheck -->

<!--bootstrap_select-->
<script src="<?=$racine?>public/plugins/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?=$racine?>public/plugins/bootstrap-select-1.12.4/js/i18n/defaults-fr_FR.js" type="text/javascript"></script>

<script src="<?=$racine?>public/plugins/bootstrap-tour-0.12.0/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<?php // </editor-fold>?>
