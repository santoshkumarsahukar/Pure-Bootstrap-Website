<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$connection=mysqli_connect("localhost","root","","santosh");
/*if($connection)
	echo "connected";*/
$query="INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message');";
$result=mysqli_query($connection,$query);
if($result)
	echo "
<script>
alert('Inserted');
window.location.href='index.html';
</script>";

?>