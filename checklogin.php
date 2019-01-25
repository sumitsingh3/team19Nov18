<?php require_once('connect.php'); ?>
<?php 
$username = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$query=mysqli_query($conn,"select * from users where email='".$username."' and password='".$password."'");
$num=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
if($num>=1){
	session_start();
	$_SESSION['username']=$row['email'];
	$_SESSION['name']=$row['name'];
	

	header("location:home.php?ok=ok");

}else{
header("location:index.php?err=invalid_id");
}
?>