
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bo
	otstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="buttonstyle.css">
    <style>
	.navbar-fixed-top {
  top: 0;
      }
   .navbar-fixed-bottom {
    bottom: 0;
    }

    </style>
	<script type="text/javascript">
		function addCart(id){
			//alert(id);
			var userid= //get this from session;
			$.post("addCart.php", { pro_id: id  })
			.done(function(data) {
			//alert(data); 
			                var value = parseInt(document.getElementById('add').innerHTML);
							document.getElementById('add').innerHTML=value+1;
							document.getElementById(id).innerHTML="Added to Cart";
				document.getElementById(id).className="btn btn-success btn-xs";
				location.reload(true);
			});
	//		id='product'  class='btn btn-danger btn-xs'
		}
</script>
</head>
<body>

	<?php include 'NavigationBar.php';?>
	
	
	
	
	
	<div class="container-fluid">
	<br></br>
	<br></br>
	
	
		<div class="col-md-1"></div>

		<div class="col-md-2 col-xs-12">
			<div class="nav nav-pills nav-stack">
				<li class="nav-item active btn-block" ><a href="#" class='nav-link'><h4>categories</h4></a><li>
				<li class="nav-item">
                    <?php
                    while($row=mysql_fetch_array($res))
                    {
					$cat_id=$row["cat_id"];
                    echo "<a href='http://localhost/shopping/USER/homepage.php?cat_id=$cat_id' class='nav-link'><font size='5'>".$row["cat_name"]."</font></a>";

                    }
                    ?>
                </li>
			</div>
			<div class="nav nav-pills nav-bar nav-stack">
			    
			</div>
		</div>
		<div class="col-md-8 col-xs-12">
			<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
					  <?php
					  
					  if (isset($_POST["search"]))
					       {
							 $keyword=$_POST["search_value"]; 
							 $pquery = "select * from items where iname LIKE '%$keyword%'";
						   }
					   else if(isset($_GET['cat_id']))
					        {
							$cat_id=$_GET['cat_id'];
							$pquery="select * from items where cat_id='$cat_id'";
						    }
					   else {
						
								$pquery="select * from items  LIMIT 0,9";
							}

							

							$run_query = mysql_query($pquery,$connect);
							if(mysql_num_rows($run_query) > 0){
							while($prow = mysql_fetch_array($run_query)){
							$pro_id    = $prow['i_id'];
							$pro_cat   = $prow['cat_id'];
							//$pro_brand = $prow['product_brand'];
							$pro_title = $prow['iname'];
							$pro_price = $prow['price'];
							$pro_image = $prow['images'];
							$disbutton="select * from cart where  i_id='$pro_id' and u_id='$uid'";
					        $dires=mysql_query($disbutton,$connect);
							$val=mysql_num_rows($dires);
					echo "
						<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='../ADMIN/images/$pro_image' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$.$pro_price.00
								 ";if($val==0){ 
								    
									echo"<button pid='$pro_id' onclick=addCart('$pro_id')  name=id='".$pro_id."' style='float:right;' id='$pro_id'  class='btn btn-danger btn-xs'>AddToCart</button>";}
								else{
								echo"<button pid='$pro_id' onclick=addCart('$pro_id')  name=id='".$pro_id."' style='float:right;' id='$pro_id'  class='btn btn-success btn-xs' disabled >AddedToCart</button>";}
								
								echo"  
								</div>

							</div>
						</div>	
						";
						}
					}

					  ?>
					</div>
					<div class="panel-footer">&copy; PAVAN</div>



			</div>
		</div>
	</div>

</body>
</html>