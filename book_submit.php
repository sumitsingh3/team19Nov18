<?php session_start();
	include("connect.php");
?>
<?php
$query="INSERT INTO users SET id='',name='".$_POST['name']."',mname='".$_POST['mname']."',lname='".$_POST['lname']."',dob='".$_POST['dob']."',email='".$_POST['email']."',password='".$_POST['password']."',Street1='".$_POST['Street1']."',Street2='".$_POST['Street2']."',state='".$_POST['state']."',postcode='".$_POST['postcode']."',question='".$_POST['question']."',answer='".$_POST['answer']."'";
$run=mysqli_query($conn, $query);
if ($run) {
	?>
    <script>
    window.location.href='register.php?action=upok';
    </script>
	<?php 
}
else{
	?>
    <script>
    window.location.href='register.php?action=upno';
    </script>
	<?php
}
?>