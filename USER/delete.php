<?php
session_start();
$connect=mysql_connect("localhost","root","");

mysql_select_db("shopping",$connect);

                       $uid=$_SESSION['userid'];
				      $pro_id=$_POST['pro_id'];

$sql="delete from cart where u_id='$uid' and i_id='$pro_id'";
$res=mysql_query($sql,$connect);
if($res){
echo"success";}
?>