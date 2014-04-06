<?php
	session_start();
	require_once ("../system/settings.php");
	require_once("../system/db_login.php");
	$conn =  dbconnect($dbconn);

	if (!isset($_SESSION['username'])) {
		$username = $_POST['email'];
		$pass = md5($_POST['password']);
		if($username!=null)
		{
			$username = mysql_real_escape_string($username);
		
			$query = mysql_query("SELECT * FROM `users` WHERE email='$username'");
			$count = mysql_num_rows($query);
			if($count==1)
			{
				while($row = mysql_fetch_array($query))
				{
					if($row['password']==$pass)
					{
						$_SESSION['username'] = $row['email'];
					}
					else
					{
						echo("<script>alert('Password doesn't match. Try again!')</script>");
						unset($_SESSION['username']);
					}
				}
			}
			else{
				echo("<script>alert('User doesn't exist. Please sign up!')</script>");
			}
		}
	} else {
		echo $_SESSION['username'];
	}
?>
<!DOCTYPE html>
<html id = "content" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpotMe</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
	<style>
		#search {
			visibility: hidden;
		}
	</style>
</head>
<body>
	<?php
		require_once ("navbar.php");
	?>
   
    <div class="intro-header" style="height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="intro-message" style="margin-top: 100px;">
                        <h2>A marketplace to allow anyone to have access to affordable and quality personal training.</h2>
                        <hr class="intro-divider">
                        <div class="input-group col-md-8 col-md-offset-2 input-group-lg">
                          <input type="text" id ="search-zip" class="form-control" placeholder="Your Zipcode">
                          <span class="input-group-btn">
                            <button id = "search-user" class="btn btn-primary" type="button">Search Trainers</button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    
    <!-- Modals -->
	<?php
		require_once("modal.php");
	?>
    

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/common.js"></script>
	<script src="js/home.js"></script>
	<script src="js/ratings.js"></script>
    <script src="js/ratings2.js"></script>
    <script src="js/jquery.mask.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/payment.js"></script>
	<script src="js/logout.js"></script>
</body>
</html>
