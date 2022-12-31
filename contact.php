
<?php
/*if (isset($_REQUEST['page']))
	$page=$_REQUEST['page'];
else
	$page="index";
include("navigation.php");**/
if(!(isset($_POST['submit'])))
{
	echo'<h3 align="center">Fill out my contact form</h3>';
	echo'<form method="POST" action="">';
	echo'<div class="form-group">';
	echo'<label>First Name:</label>';
	echo'<input class="form-control" type="text" id="fname" name="fname"';
	echo'onblur="checkName(this.value, this.id)">';
	echo'<p class="help-block" id="fnameHelp"></p>';
	echo'</div>';
	echo'<div class="form-group">';
	echo'<label>Last Name:</label>';
	echo'<input class="form-control" type="text" id="lname" name="lname"';
	echo'onblur="checkName(this.value, this.id)">';
	echo'<p class="help-block" id="lnameHelp"></p>';
	echo'</div>';

	echo'<div class="form-group">';
	echo'<label>Email:</label>';
	echo'<input class="form-control" type="text" id="email" name="email"';
	echo'onblur="checkEmail(this.value, this.id)">';
	echo'<p class="help-block" id="emailHelp"></p>';
	echo'</div>';
	echo'<div class="form-group">';
	echo'<label>Usename:</label>';
	echo'<input class="form-control" type="text" id="username" name="username"';
	echo'onblur="checkUsername(this.value, this.id)">';
	echo'<p class="help-block" id="userHelp"></p>';
	echo'</div>';

	echo'<div class="form-group">';
	echo'<label>Comments</label>';
	echo'<input class="form-control" type="text" id="comments" name="comments"';
	echo'onblur="checkComment(this.value, this.id)">';
	echo'<p class="help-block" id="commentHelp"></p>';
	echo'</div>';
	echo'<button type="submit" name="submit" value="submit">Submit</button>';
	echo'</form>';
}

if(isset($_POST['submit']))
{
	$fisrtName=$_POST['fname'];
	$lastName=$_POST['lname'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$comments=$_POST['comments'];
	echo '<h2>Results:</h2>';
	echo '<p>First Name: '.$fisrtName.'</p>';
	echo '<p>Last Name: '.$lastName.'</p>';
	echo '<p>Email: '.$email.'</p>';
	echo '<p>Username: '.$username.'</p>';
	echo '<p>Comments: '.$comments.'</p>';
}
?>
