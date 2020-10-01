<?php
include 'dbconfig.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$wmob = $_POST['wmob'];
$org = $_POST['org'];
$course = $_POST['course'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$submit = $_POST['submit'];

$sql = "INSERT into attendee(name,email,mob,wmob,org,course,branch,year) VALUES('$name','$email','$mob','$wmob','$org','$course','$branch','$year')";

//$result = mysqli_querry($con, $sql);

if(!mysqli_query($con, $sql))
{
	echo 'REGISTRATION UNSUCCESSFUL';

}
else
{
	echo 'REGISTRATION SUCCESSFUL';
}

header("refresh:1; url=index.php");


?>