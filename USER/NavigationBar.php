<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
     
  
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <style>
	html, body{
    margin:0px;
    padding:0px;
}
    </style>


</head>
<?php
             session_start();
			
			$connect=mysql_connect("localhost","root","");
			mysql_select_db("shopping",$connect);
			$query="select * from category";
			$res=mysql_query($query,$connect);
			$row_count=mysql_num_rows($res);
			?>
<body>

    <nav class="navbar navbar-fixed-top navbar-expand-sm navbar-dark bg-secondary">
        <a class="navbar-brand">Budigi</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ">

                <li class="nav-item"> <a class="nav-link" href="http://localhost/shopping/USER/homepage.php"><span class="glyphicon glyphicon-home"></span><b>Home</b></a></li>
                <li class="nav-item"><span></span></li>
                <li class="nav-item"> <a class="nav-link" href="http://localhost/shopping/USER/homepage.php"><span class="glyphicon glyphicon-home"></span><b>Products</b></a></li>

            </ul>
            <form class="navbar-form navbar-left" method="post" action="homepage.php">
                <input class="form-control" type="text" name="search_value" placeholder="Search">
                <button class="btn btn-toggle btn-primary" name="search" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="navbar-nav navbar-right">
                <li >
				    <?php
					
					$uid=$_SESSION['userid'];
					$cartvalue="select * from cart where  u_id='$uid'";
			        $cartquery=mysql_query($cartvalue,$connect);
			        $cart_count=mysql_num_rows($cartquery);
			      ?>
                    <button class="btn  btn-toggle"><a href="cart.php" class="btn  btn-light btn-toggle" style="text-decoration:none; color:black;" >
					<span class="glyphicon glyphicon-shopping-cart"></span>MyCart <span class="badge" id="add" color="blue"><?php echo $cart_count; ?></span></a>
                    </button>
                </li>
				<br></br>
                <li><a  class="btn btn-outline" data-toggle="dropdown"  style="text-decoration:none;font-size: 18px; color:black;"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["username"]; ?><span class="caret"></span></a></button>
					<ul class="dropdown-menu" style="text-decoration:none; color:black;">
						<li><a  href="cart.php" style="text-decoration:none;font-size: 16px; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a   href="#" style="text-decoration:none;font-size: 16px; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a  href="#" style="text-decoration:none; color:blue;">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
            </ul>
        </div>
    </nav>
	

</body>
</html>