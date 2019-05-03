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
          href="./img/lock.PNG"/>

    <title>Cybersecurity</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- Custom styles for this template -->
      <link href="/css/style.css" rel="stylesheet">
      <!--
	<link rel="stylesheet" href="./css/animBG2.css" type="text/css" />
-->
	<link rel="stylesheet" href="./css/temp.css" type="text/css" />


	<link rel="stylesheet" href="./css/animBG.css" type="text/css" />

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
            <a class="navbar-brand" href="#"><img src="img/lock.png"/> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a  href="index.php">Home</a></li>
                <li><a href="index.html">Cybersecurity Game</a></li>
<!--
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"> <i class="fa" aria-hidden="true"></i>Example DropDown<span
                        class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li>First</li>
                          <li role="separator" class="divider"></li>
                </li>
-->


<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
   aria-expanded="false"> <i class="fa" aria-hidden="true"></i>Types of Vulnerabilities<span
        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="sqlinjection.php">SQL Injection</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="csscripting.php">Cross-Site Scripting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="cmdexecution.php">Command Execution</a></li>
                    <!--
                    <li role="separator" class="divider"></li>
                    <li><a href="clickjk.php">ClickJacking</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="csreqforge.php">Cross-Site Request Forgery</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="refxss.php">Reflected XSS</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="fileupvul.php">File Upload Vulnerabilities</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="openredir.php">Open Redirects</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="unencrypted.php">Unencrypted Communication</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="userenum.php">User Enumeration</a></li>
                  -->
                    <!--
                    <li role="separator" class="divider"></li>
                    <li><a href="passmismanage.php">Password Mismanagement</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="maladvert.php">Maladvertising</a></li>
                  -->

                </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><form><input type="text"></li>
				<li><input type="submit"></li>
            </ul>

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
        $file = '/pages/main.php';
    }
    include($_SERVER['DOCUMENT_ROOT'] . $file);
    ?>

    <div id="footer">
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                &copy; Appathon 2019, Information is from <a href="http://www.Hacksplaining.com/lessons" style="color:white"><u>Hacksplaining.com</u></a>
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
