
<html>
<head><title>Register Form</title></head>
<body>
    <center>
        <h1>Register Form</h1>
    <fieldset>
<h4 style="color:red;" id="error"></h4>
    <form name="form" action="#" method="POST">
        <input type="text" name="name" placeholder="Username">
        <input type="number" name="phn" placeholder="+91">
        <input type="email" name="email" placeholder="Your Email">
	<br><br>
	Gender:<br>
	<input type="radio" name="male">Male
	<input type="radio" name="female">Female
	<input type="radio" name="other">Other
	<br><br>	
        <input type="password" name="pass1" placeholder="Password">
        <input type="password" name="pass2" placeholder="Confirm Password">

        <br><br>
        <button type="submit" value="Submit" name="Submit">Register Now</button>
        <button type="clear" value="clear" name="clear">Clear</button>

    </form>

    </fieldset>
</center>

<?php
if(isset($_POST['Submit']))
{
$username=$_POST['name'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$email=$_POST['email'];
$phone=$_POST['phn'];
if(empty($username))
{
 echo "<script>alert('Enter Username!')</script>";
}
else if(empty($email))
{
 echo "<script>alert('Enter e-mail!')</script>";
}
else if(empty($password1))
{
 echo "<script>alert('Enter password!')</script>";
}
else if(strlen($password1)<8)
{
 echo "<script>alert('Your password must contain atleat 8 character!')</script>";
}
else if($password1!=$password2){
echo "<script>alert('Passwords do not Match!')</script>";
}
else if(empty($phone))
{echo "<script>alert('Enter Phone Number!')</script>";
}
else
{
 echo "<script>alert('Registration successful!')</script>";
}
}
?>
</body>
</html>

