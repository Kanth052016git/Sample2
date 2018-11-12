<!DOCTYPE html>
<body>
<form action="login.php" method="POST">
<input type="text" name="user">
<input type="pass" name="pass">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
if(isset($_POST['submit']))
{
if($user=="me" AND $pass==123)
{
header("Location:login1.php");
}
else
{
echo "Wrong Username / Password.";
}
}
?>