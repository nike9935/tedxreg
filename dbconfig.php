<?php

$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con, 'tedxreg');
if(!$con)
{
	echo 'DB NOT CONNECTED';
}
?>