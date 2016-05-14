<?php
/**
 * Created by Gaboso
 * User: gaboso
 * Date: 13/05/2016
 */
$template_url =  get_bloginfo('template_directory');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gaboso</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $template_url ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $template_url ?>/css/simple-sidebar.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo $template_url ?>/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $template_url ?>/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/cursowp">Start Gaboso</a>
            </li>
            <li>
                <a href="/cursowp/cursowp-posts/">CursoWP Posts</a>
            </li>
            <li>
                <a href="/cursowp/pessoas/">Pessoas</a>
            </li>
            <li>
                <a href="/cursowp/pagina-exemplo">Pagina de exemplo</a>
            </li>
            <li>
                <a href="/cursowp/ursos-arctos">UrsosArctos</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

