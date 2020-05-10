<?php
session_start();
$connect=mysql_connect("localhost","root","");
if($connect){}
else{
//echo "<div class='alert alert-danger'>connection problem<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
}
mysql_select_db("shopping",$connect);

                       $uid=$_SESSION['userid'];
				      $pro_id=$_POST['pro_id'];
					  
					  $quantity=1;
					  $total=$quantity*$pro_price;
					  $addcart="insert into cart values('$uid','$pro_id','$quantity','$total')";
					  $addcartresult=mysql_query($addcart,$connect);
					  /*
					  $disbutton="select * from cart where  i_id='$pro_id' and u_id='$uid'";
					   $dires=mysql_query($disbutton,$connect);
					   $count=mysql_num_rows($dires);
					  if($count>1)
					   {
					    //echo json_encode("false");
				       
			     
			              }

						  else{

	             
	//$addcart="insert into cart values('u_1','i_1','$quantity','100')";
	                  
					  if($addcartresult){
					     //echo json_encode("true");
						 }
					}
					*/
?>