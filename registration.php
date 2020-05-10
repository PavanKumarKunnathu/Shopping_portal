
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="logstyle.css">

</head>
<?php include 'regvalidation.php'; ?>
<body>
<
<!-- partial:index.partial.html -->
    <div class="container-fluid">
        <div class="form">

         
            <div class="tab-content">
                <div id="signup">
                    <h1>Sign Up For Free</h1>

                    <form action="registration.php" method="post">
					    <div class="field-wrap">
                            <label>
                                UserName<span class="req">*</span>
                            </label>
                            <input type="text" name="username" required autocomplete="off" />
                        </div>
                        

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="email" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Set A Password<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off" />
                        </div>
						 <div class="field-wrap">
                            <label>
                                PhoneNumber<span class="req">*</span>
                            </label>
                            <input type="number" name="mobile" required autocomplete="off" />
                        </div>
						 
						<div class="field-wrap">
                            <label>
                                Address<span class="req">*</span>
                            </label>
                            <textarea  rows="2" cols="2" name="address" required autocomplete="off" /></textarea>
                        </div>
						

                        <button type="submit" name="register" class="button button-block">Register Now</button>
						<p></p>
						<p></p>
						<p></p>
						<br></br>
						
						

						<center><p class="sign"><font color="white"> Back To Login?</font> <a href="index.php"> Login!</a></p></center>
    
                    </form>
					
                </div>

            
                

			


                
<!-- partial -->
  <script  src="logscript.js"></script>

</body>
</html>

