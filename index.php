<?php
echo'<html>
<head>
	<title> Home</title>
<link href="../hw8/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../hw8/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
	<div class="banner"> Welcome to my Homepage! </div>';
if (isset($_REQUEST['page']))
	$page=$_REQUEST['page'];
else
	$page="index.php";
include("navigation.php");
switch($page){
	case "index":
		include("home.php");
		break;
	case "contact":
		include("contact.php");
		break;
	case "school":
		include("school.php");
		break;
	case "work":
		include("work.php");
		break;
	default:
		include("home.php");
		break;
}
		echo '</body></html>';
?>
	

	
