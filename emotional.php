<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"
          type="image/png"
          href="./img/banner.png"/>

    <title>Sample</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>


<!-- link rel="stylesheet" href="./css/animBG.css" type="text/css" /  -->


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/banner.png"/> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="health.php">Health</a></li>

                <li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"> <i class="fa" aria-hidden="true"></i> Wellness <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="emotional.php">Emotional</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="environmental.php">Environmental</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="financial.php">Financial</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="intellectual.php">Intellectual</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="occupational.php">Occupational</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="physical.php">Physical</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="social.php">Social</a></li>
					<li role="separator" class="divider"></li>
                    <li><a href="spiritual.php">Spiritual</a></li>
					
                </ul>
                </li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
                <li><form><input type="text"></li>
				<li><input type="submit"></li>
            </ul>
			<!--
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i> User <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
			-->
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div id="app">
    <div class="navpad"></div>

    <?php
    // Get Page Content
    if (isset($_GET['var1'])) {
        $p = $_GET['var1'];
    }
    if (!empty($p) && file_exists('./pages/' . $p . '.php') && stristr($p, '.') == False) {
        $file = '/pages/' . $p . '.php';
    } else {
        $file = '/pages/emomain.php';
    }
    include($_SERVER['DOCUMENT_ROOT'] . $file);
    ?>

    <div id="footer">
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                &copy; Skills Ontario 2019
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
