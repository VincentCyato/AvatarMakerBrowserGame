<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
	require_once("connection.php");
	if (isset($_GET['controller']) && isset($_GET['action'])) {
	    $controller = $_GET['controller'];
	    $action     = $_GET['action'];
	  } else {
	    $controller = 'pages';
	    $action     = 'home';
	  }

	  require_once(getcwd().'/Views/layout.php');
?>