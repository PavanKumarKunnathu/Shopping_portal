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
<!-- partial:index.partial.html -->
    <div class="container-fluid">
        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#signup">User Login</a></li>
                <li class="tab"><a href="#login">Admin Login</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">
                    <h1>User Login</h1>

                    <form action="index.php" method="post">

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" name="uemail" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" name="upwd" required autocomplete="off" />
                        </div>

                        <p class="forgot">t<a href="#">Forgot Password?</a></p>

                        <button class="button button-block"  name="userlogin">Log In</button>
						<p></p>
						<p></p>
						<p></p>
						<br></br>

                        <center><p class="sign"><font color="white"> Don't have an Account?</font> <a href="registration.php"> SignUp Now!</a></p></center>

                    </form>

                </div>

                <div id="login">
                    <h1>Admin Login</h1>

                    <form action="index.php" method="post">

                        <div class="field-wrap">
                            <label>
                                Username<span class="req">*</span>
                            </label>
                            <input type="text" name="adminusername" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" name="adminpassword" required autocomplete="off" />
                        </div>

                        <p class="forgot">t<a href="#">Forgot Password?</a></p>

                        <button class="button button-block" name="adminlogin">Log In</button>

                    </form>

                </div>

            </div><!-- tab-content -->

        </div> <!-- /form -->
    </div>
<!-- partial -->
  <script  src="logscript.js"></script>

</body>

</html>


