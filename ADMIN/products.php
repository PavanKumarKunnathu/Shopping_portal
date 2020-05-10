<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <style>
        body {
            background-color: darkslategrey;
        }

        .container-fluid {
            background-color:;
            width: 350px;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

            .container-fluid label {
                background-color: wheat;
            }
    </style>
	
	
</head>
 
<?php
//			global $connect;
			$connect=mysql_connect("localhost","root","");
			mysql_select_db("shopping",$connect);
			$query="select * from category";
			$res=mysql_query($query,$connect);
			$row_count=mysql_num_rows($res);
			?>
			<?php include'adminnavbar.php'; ?>
<body>

    <div class="container-fluid">
	
        <form name="form1" method="post" action="item.php" enctype="multipart/form-data">
		
			<div>
                <label class="control-labelcstyle" for="categories">select category</label>
            </div>

		   <div class="form-group">
              <select  name="categories" class="form-control"  id="categories">
			
                 <?php 
			         while($row=mysql_fetch_array($res))
			         {
			            echo "<option value='".$row['cat_id']."'>".$row["cat_name"]."</option>";
			                
			           }
		         ?>	
              </select>
           </div>
		   <div>
                <label class="control-labelcstyle" for="subcategories">select subcategory</label>
            </div>

		   <div class="form-group">
              <select  name="subcategories" class="form-control" id="subcategories">
			
                 <?php 
				     $query2="select * from subcategory";
			         $res2=mysql_query($query2,$connect);
			         while($row1=mysql_fetch_array($res2))
			         {
			            echo "<option value='".$row1['scat_name']."'>".$row1["scat_name"]."</option>";
			                
			           }
		         ?>	
              </select>
           </div>

            <div>
                <label class="control-labelcstyle=" for="iname">Add Item</label>
            </div>
            <div class="form-group">
                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                    <input type="text" name="iname" class="form-control" id="iname" placeholder="Add Item" required="required"/>
                </div>
           </div>

		   <div>
                <label class="control-labelcstyle=" for="strikeprice">StrikePrice</label>
            </div>
            <div class="form-group">


                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                    <input type="text" name="strikeprice" class="form-control" id="strikeprice" placeholder="Strikeprice" required/>
                </div>

            </div>
			 <div>
                <label class="control-labelcstyle=" for="price">Price</label>
            </div>
            <div class="form-group">


                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                    <input type="text" name="price" class="form-control" id="price" placeholder="price" required />
                </div>

            </div>
			<div>
                <label class="control-labelcstyle=" for="image">Image</label>
            </div>
            <div class="form-group">


                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                    <input type="file" name="image" class="form-control" id="image" placeholder="upload image" required />
                </div>

            </div>

			 
			 
            <button class="btn bg-primary" name="submit">Add prooducts</button>
        </form>
    </div>
</body>
</html>