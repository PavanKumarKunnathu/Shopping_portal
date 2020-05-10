<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <style>
        body {
            background-color: #613263;
        }

        .container {
            background-color:;
            width: 300px;
            height: 300px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

            .container label {
                background-color: wheat;
            }
    </style>
</head>
<?php 

if(isset($_POST['submit'])){
$connect=mysql_connect("localhost","root","");
if($connect){}
else{
echo "<div class='alert alert-danger'>connection problem<button type='button' class='close' data-dismiss='alert'>close&times;</div>";
}
mysql_select_db("shopping",$connect);
$categories=$_POST['categories'];
$subcategories=$_POST['subcategories'];
$query1="select cat_id from category where cat_name='$categories'";
$result1=mysql_query($query1,$connect);
$row=mysql_fetch_array($result1);
$cat_id=$row['cat_id'];
$query2="select * from subcategory";
$result2=mysql_query($query2,$connect);
$row_num=mysql_num_rows($result2);
$scat_id="scat_".($row_num+1);
if($result2){
     
	 }
else{
	"<div class='alert alert-danger'>mysql_error();</div>";
    }
$query3="insert into subcategory values('$cat_id','$scat_id','$subcategories')";
$result3=mysql_query($query3,$connect);
if($result3){
     echo "<div class='alert alert-success'>$subcategories is inserted<button type='button' class='close' data-dismiss='alert'>close &times;</div>";
}
else{
	echo mysql_error();
}

}
else{
}

?>
<?php
			$connect=mysql_connect("localhost","root","");
			mysql_select_db("shopping",$connect);
			$query="select * from category";
			$res=mysql_query($query,$connect);
			$row_count=mysql_num_rows($res);
			?>
			<?php include'adminnavbar.php'; ?>
<body>

    <div class="container">
        <form name="form1" method="post" action="subcategory.php">
		
			<div>
                <label class="control-labelcstyle" for="categories">select category</label>
            </div>

		   <div class="form-group">
              <select  name="categories" class="form-control" id="categories">
			
                 <?php 
			         while($row=mysql_fetch_array($res))
			         {
			            echo "<option value='".$row['cat_name']."'>".$row["cat_name"]."</option>";
			                
			           }
		         ?>	
              </select>
           </div>
            <div>
                <label class="control-labelcstyle=" for="subcategories">Add subcategory</label>
            </div>
            <div class="form-group">


                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                    <input type="text" name="subcategories" class="form-control" id="subcategories" placeholder="Add Category" required/>
                </div>

            </div>
			 
            <button class="btn bg-primary" name="submit">Add SubCategory</button>
        </form>
    </div>
</body>
</html>