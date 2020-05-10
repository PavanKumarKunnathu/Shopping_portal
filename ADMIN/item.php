<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("shopping",$connect);
$cat_id=$_POST["categories"];
$subcategory=$_POST['subcategories'];
$iname=$_POST["iname"];
$strikeprice=$_POST["strikeprice"];
$price=$_POST["price"];

//uploading image to th folder
//images to database
$image=$_FILES['image']['name'];
//echo $image;

//echo"ccccccc$category";


echo"catid is $cat_id";
$query4="select scat_id from subcategory where scat_name='$subcategory'";
$res4=mysql_query($query4,$connect);
$subrow=mysql_fetch_array($res4);
$scat_id=$subrow['scat_id'];
echo"subcategory is $scat_id";
$query2="select * from items";
$res2=mysql_query($query2,$connect);
$row_num=mysql_num_rows($res2);
$i_id="i_".($row_num+1);
$query3="insert into items values('$i_id','$cat_id','$scat_id','$iname','$strikeprice','$price','$image')";
$res3=mysql_query($query3,$connect);
if($res3){
	echo "inserted sucess fully";
	//uploaded image
	 $file_tmp =$_FILES['image']['tmp_name'];
	 $file_name = $_FILES['image']['name'];
	if(move_uploaded_file($_FILES['image']['tmp_name'],"images/".$file_name)){
		echo "upload sucess";
	}
	else{echo "failed to upload";} 
}
else{
	echo mysql_error();

}
//upload file

//display image
$iqry="select * from items where images='$image' ";

$ires=mysql_query($iqry,$connect);

                while($irow = mysql_fetch_array($ires))

                {

           //echo '<img id="my" height="150" width="320" src="data:image;base64,'.$irow['images'].' "> ';
               echo "<img  height='300' width='320' src='images/".$irow['images']."'>"; 

                        $pro_image=$irow['images'];
             echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>'pro_title'</div>
								<div class='panel-body'>
								 <img  height='300' width='320' src='images/".$irow['images']."'>
								 <img src='images/".$pro_image."' alt='images/".$pro_image."' style='width:160px; height:250px;'/>
									
								</div>
								<div class='panel-heading'>$.pro_price.00
									<button pid='pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
				</div>	";
}



?>