<?php
$connect=mysql_connect("localhost","root","");
if($connect){}
else{
echo "<div class='alert alert-danger'>connection problem<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
}
mysql_select_db("shopping",$connect);
   
if(isset($_POST['register'])){
 $uname = $_POST["username"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	$sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1" ;
	$sql2="select * from users where username='$uname' limit 1";
	$check_query = mysql_query($sql,$connect);
	$count_email = mysql_num_rows($check_query);
	$check_username = mysql_query($sql2,$connect);
	$count_username = mysql_num_rows($check_username);
	if(!preg_match($name,$uname)){
		echo "<div class='alert alert-danger'>enter valid username<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
		

	}
	elseif($count_username > 0){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>username already Exists</b>
			</div>
		";
	}
	elseif(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		
	}
	elseif(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		
	}
	elseif(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
	
	}
	elseif(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		
	}
	
	elseif($count_email > 0){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email already Exists</b>
			</div>
		";
	}
	else 
	   {
	   
		 $password = md5($password);
		
         $user_id="select * from users";
		 $id_res=mysql_query($user_id,$connect);
         if($id_res){
	 
	     $u_id=mysql_num_rows($id_res)+1;
         $uid ="u_".$u_id;
		 }
		 $user_insert="insert into users values('$uid','$uname','$email','$password','$mobile','$address')";
		 $user_res=mysql_query($user_insert,$connect);
		 if($user_res){
		   
			echo "<div class='alert alert-success'>welcome $uname thank You for registration.<a href='login.php'>click Here</a><p> To login</p><button type='button' class='close' data-dismiss='alert'>close&times;</div>";
		  }
	   }

}
if(isset($_POST['adminlogin'])){
  $admin_username=$_POST['adminusername'];
  $admin_password=$_POST['adminpassword'];
  if(($admin_username=="admin")  && ($admin_password=="admin")){
       header("location:ADMIN/categories.php");
   }
   else{
    echo "<div class='alert alert-danger'>incor rect username  and password<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
    }
}
if(isset($_POST['userlogin'])){
  session_start();
  $user_email=$_POST['uemail'];
  $user_password=md5($_POST['upwd']);
  $login_query="select * from users where email='$user_email' and password='$user_password' LIMIT 1 ";
  $login_result=mysql_query($login_query,$connect);
  if(mysql_num_rows($login_result)==1)
    {
	$lrow=mysql_fetch_array($login_result);
	$_SESSION['userid']=$lrow['u_id'];
	$_SESSION['useremail']=$lrow['email'];
	$_SESSION["username"]=$lrow["username"];
	header("location:USER/homepage.php");
   }
   else{
    echo "<div class='alert alert-warning'>incorrect username  and password<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
    }




}

?>
