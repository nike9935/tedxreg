<html>
<head>
	<title>TEDx Attendee Registration Page</title>

	<link rel="icon" href="favicon.jpg">
	<style type="text/css">
		input
		{
			background-color: black;
			text-decoration: none;
			border: none;
			border-bottom: 1px solid white;
			color: grey;
			font-size: 120%;
			text-align: center;
		}
	 input[type="submit"]
	{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: white;
    font-size: 20px;
    border-radius: 20px;
    text-decoration: none;
}
 input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

	</style>
</head>
<body style="background-color: rgb(250,62,50); margin:0">

<section style="background-color: black; padding:10px;  text-align: center;">
	<img src="tedx.png" style="height: 12%;width: 20%">
</section>

<section style="text-align: center;">
	<p style="font-size: 200%"><strong>ATTENDEE REGISTRATION</strong></p>
</section>

<section style="background-color: black; padding:10px;  text-align: center; color: white; margin-left: 30%;margin-right: 30%">
	<form action="regaction.php" method="post">
		<label style="font-size: 150%">Name<sup style="color: red;">*</sup></label><br><br><input required type="text" name="name"><br><br>
		<label style="font-size: 150%">Email ID<sup style="color: red;">*</sup></label><br><br><input required type="text" name="email"><br><br>
		<label style="font-size: 150%">Mobile Number<sup style="color: red;">*</sup></label><br><br><input required type="text" name="mob"><br><br>
		<label style="font-size: 150%">Whatsapp Number</label><br><br><input type="text" name="wmob"><br><br>
		<label style="font-size: 150%">Organization<sup style="color: red;">*</sup></label><br><br><input required type="text" name="org"><br><br>
		<label style="font-size: 150%">Course</label><br><br><input  type="text" name="course"><br><br>
		<label style="font-size: 150%">Branch</label><br><br><input  type="text" name="branch"><br><br>
		<label style="font-size: 150%">Year</label><br><br><input  type="text" name="year"><br><br><br>
		<input type="submit" name="submit" value="REGISTER">
	</form>
</section>
</body>
</html>


