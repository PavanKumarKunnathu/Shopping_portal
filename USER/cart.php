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
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="buttonstyle.css">
	<script type="text/javascript">
	function increaseValue(id,price,totalsum) {
	//alert(id);
       var value = parseInt(document.getElementById('i'+id).innerHTML);
	   var  totalvalue= parseInt(document.getElementById('total').innerHTML);
        value++;
     document.getElementById('i'+id).innerHTML= value;
	 document.getElementById('s'+id).innerHTML=value*price+".00";
	 document.getElementById('total').innerHTML=totalvalue+price;
      }
	 function decreaseValue(id,price,totalsum) {
      var value = parseInt(document.getElementById('i'+id).innerHTML);
	  var  totalvalue= parseInt(document.getElementById('total').innerHTML);
	  if(value==1){
	  value=1;
	   document.getElementById('total').innerHTML=totalvalue;
	  }
	  else{value--;
	   document.getElementById('total').innerHTML=totalvalue-price;
	   }
      document.getElementById('i'+id).innerHTML = value;
	  document.getElementById('s'+id).innerHTML=value*price+".00";

	  
     }
	   
	   
	</script>
	<script type="text/javascript">
      function deleteValue(id){
			$.post("delete.php", { pro_id: id  })
			.done(function(data) {
			   window.location.reload(true);
			});
	//		
		}
						  </script>
			       
    <style>
	  

    </style>
</head>
<body> 

	<?php include 'NavigationBar.php';?>
<div class="container">
<br></br>
<br></br>
   <div class="row">
			<div class="col-md-2"></div>
			 <div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			 </div>
			<div class="col-md-2"></div>
	</div>
	<div class="row">
	   <div class="col-md-12 col-xs-12">
			<div class="panel panel-danger">
					<div class="panel-heading">Shopping Bag</div>
					<div class="panel-body">
					  
				      <?php
					  $addcart="select a.i_id,a.iname,a.price,a.images,b.u_id,b.i_id,b.quantity from items a,cart b where a.i_id=b.i_id AND b.u_id='$uid'";
					  $addcart_res=mysql_query($addcart,$connect);
							$count_rows=0;
							if(mysql_num_rows($addcart_res) > 0){
							while($prow = mysql_fetch_array($addcart_res)){
							$pro_id    = $prow['i_id'];
							//$pro_brand = $prow['product_brand'];
							$pro_title = $prow['iname'];
							$pro_price = $prow['price'];
							$pro_image = $prow['images'];
							//for totalcost
							
							$cart_count=mysql_num_rows($cartquery);
					        $sqll=mysql_query("select i.price from cart c,items i where c.i_id=i.i_id and c.u_id='$_SESSION[userid]'",$connect);
					        $count_rows=mysql_num_rows($sqll);
					         
					        $sumcount=0;
					
					while($cart_rows=mysql_fetch_array($sqll))
                       {
                       $sumcount=$sumcount+ $cart_rows['price'];
                        }

					       echo "
						<div class='col-md-12'>
							<div class='panel panel-info'>
								<div class='panel-heading'>
								    <div class='row'>
									   <div class='col-sm-1 col-md-1 '><b>Action</b></div>
							           <div class='col-sm-1 col-md-3 '><b>Product Image</b></div>
							            <div class='col-sm-1 col-md-3 '><b>Product Name</b></div>
							           <div class='col-sm-1 col-md-3 '><b>Quantity</b></div>
							            <div class='col-sm-1 col-md-2 '><b>Product Price</b></div>
							            
							         </div>
								</div>
								<div class='panel-body panel-dark'>
								     <div class='row'>
									   <div class='col-sm-1 col-md-1 '><button name='delete'  class='btn btn-default' onclick=deleteValue('$pro_id') ><span >X</span></button></div>
							           <div class='col-sm-1 col-md-3 '><img src='../ADMIN/images/$pro_image' style='width:100px; height:80px;'/></div>
							            <div class='col-sm-1 col-md-3 '><b>$pro_title</b></div>
							           <div class='col-sm-1 col-md-3 '><button name='add' class='btn btn-primary' onclick=increaseValue('$pro_id',$pro_price,$sumcount)>+</button>
									   <b><span id='i$pro_id'>1</span></b>
									   <button name='sub' class='btn btn-primary' onclick=decreaseValue('$pro_id',$pro_price,$sumcount)>-</button>
									   </div>
										
										<div class='col-sm-1 col-md-2 col-xs-2'><b><span id='s$pro_id'>$pro_price.00</span></b></div>
							            
							         </div>
								</div>
							</div>
						</div>
									
						";

						}
					}

					
					//echo "sumcount is$sumcount";
					 
					if($count_rows!=0) {
					echo"</div>
					<div class='panel-heading'>
					   <div class='row'>
					     <div class='col-sm-8 col-md-10 '></div>
						 <div class='col-sm-3 col-md-1'><button class='btn btn-danger btn-lg'>pay₹<span id='total'>$sumcount</span>
						 </button></div>
					   </div>
					</div>";
					}
					else{
				echo"</div>
					<div class='panel-body'>
					   <div class='row'>
					     <div class='col-sm-8 col-md-10 '><h2><p class='text-info'>Your cart is empty.please add items</p></h2></div>
						 <div class='col-sm-3 col-md-1'><h3 class='text-primary'>Happy Shopping</h3>
						</div>
					   </div>
					</div>";
					}
					
					?>
			</div>
        </div>
    </div>

					
