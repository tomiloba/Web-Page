<?php
//$page=$_REQUEST['page'];
switch($page){
	case "index":
		echo '<div class="row margins">
			<div class="col-md-3 navActive"><a href="index.php">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=school">School</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=work">Work</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
		
	case "school":
		echo '<div class="row margins">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=school">School</a></div>
			<div class="col-md-3 navItem"><a href="index.php"?page=work>Work</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
			
		</div>';
		break;
	
	case "work":
		echo '<div class="row margins">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=school">School</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=work">Work</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	
	case "contact":
		echo '<div class="row margins">
			<div class="col-md-3 navItem"><a href="index.php?page=index">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=school">School</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=work">Work</a></div>
			<div class="col-md-3 navActive"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
	default:
			echo '<div class="row margins">
			<div class="col-md-3 navActive"><a href="index.php">Home</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=school">School</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=work">Work</a></div>
			<div class="col-md-3 navItem"><a href="index.php?page=contact">Contact</a></div>
		</div>';
		break;
		
}
?>
