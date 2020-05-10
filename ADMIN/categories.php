<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <style>
        body {
            background-color:#2d4d75;
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
$query1="select * from  category";
$result1=mysql_query($query1,$connect);
if($result1){
     $rows=mysql_num_rows($result1);
     $c="cat_".($rows+1);
	 }
else{
	"<div class='alert alert-danger'>mysql_error();</div>";
    }
$query2="insert into category values('$categories','$c')";
$result2=mysql_query($query2,$connect);
if($result2){
     echo "<div class='alert alert-success'>$categories is inserted<button type='button' class='close' data-dismiss='alert'>close &times;</div>";
}
else{
	echo mysql_error();
}

}
else{
}

?>
<?php include'adminnavbar.php'; ?>
<body>
    <div class="container">
        <form name="form1" method="post" action="check.php">
		

            <div>
                <label class="control-labelcstyle=" for=" categories">Add category</label>
            </div>
            <div class="form-group">


                <div class="input-group col-md-12">
                    <span class="input-group-addon"><i class="fa fa-shopping-cart"></i></span>
                    <input type="text" name="categories" class="form-control" id="categories" placeholder="Add Category" required/>
                </div>
            </div>
            <button class="btn bg-primary" name="submit">Add Category</button>
        </form>
    </div>
</body>
</html>