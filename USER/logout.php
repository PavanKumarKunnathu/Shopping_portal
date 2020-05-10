<?php

session_start();
$connect=mysql_connect("localhost","root","");
if($connect){}
else{
//echo "<div class='alert alert-danger'>connection problem<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
}
mysql_select_db("shopping",$connect);



unset($_SESSION["uid"]);
unset($_SESSION["username"]);

unset($_SESSION["useremail"]);

header("location:../index.php");

?>