<?php 
session_start();
include("connect.php");

?>
<?php
$b=$_SESSION['bookname'];
$f=$_SESSION['uname'];
$l=$_SESSION['lastname'];

$page_name =  "select * from users where name='".$f."' and lname='".$l."'";

$run=mysqli_query($conn, $page_name);
$num=mysqli_num_rows($run);
$row=mysqli_fetch_array($run);
$street1=$row['Street1'];
$street2=$row['Street2'];
$state=$row['state'];
$postcode=$row['postcode'];
$spa=" ";

$c = $street1.' '.$street2.' '.$state.' '.$postcode;
echo $c;
$name= $f.$spa.$l;
$query="INSERT INTO meeting SET bookname='".$b."',name='".$name."',address='".$c."'";
$run=mysqli_query($conn, $query);
header("location: home.php");