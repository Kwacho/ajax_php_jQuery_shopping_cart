<!DOCTYPE html>

<html>
    
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--    Page Title-->
<title>ShareMyWeb Ajax Shopping Cart : http://www.sharemyweb.com </title>    

<!-- jQuery: Latest minified jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- BOOTSTRAP: Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="bootstrap-3.3.6/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<!-- BOOTSTRAP: Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
<!-- Main jQuery / AJAX script -->
<script type="text/javascript" src="js/mainJSscript.js"></script>
    
<!--Logo/favicon/icon-->
<link rel="shortcut icon" type="image/x-icon" href="http://sharemyweb.com/wp-content/uploads/2016/01/ShareMyWeb_Favicon.png" />    

    <!--Main CSS-->
<link href="style/style.css" rel="stylesheet" type="text/css">

</head>
    
<?php
/* Start session in a header so you don't need to start it on each single page....maybe on some :p*/
if(session_status()==PHP_SESSION_NONE){session_start();}
/* Require / request database file with methods and actions to be performed */
require_once("database.php");    
?>