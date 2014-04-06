<!DOCTYPE html>
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
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/accordion.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link href="css/results.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
</head>
<body>
    <?php
		require_once("navbar.php");
	?>
    <div class="container" style="margin-top: 70px;">
      <div class="row">
        <div class="col-lg-8" style="width: 60%; margin-left: 15px;">
          <div class="well">
            <div class="row">
              <div style="margin-left: 15px;">
                <img src="/img/henson.jpg" style="width: 70px; height: 70px; float: left;"/>
                <a style="margin-left: 10px;">Henson Tay</a>
                <p style="margin-left: 80px; color: #797979;">Hi Chin Chuen, I would like an awesome back rub from you. On my kuku bird.</p>
                <p style="margin-left: 80px; color: #797979; margin-top: -10px; padding-bottom: 10px;">10pm</p>
              </div>
            </div>
            <hr style="margin-top: 0px; margin-bottom: 10px;"/>
            <div class="row">
              <div style="margin-left: 15px;">
                <img src="/img/cc.jpg" style="width: 70px; height: 70px; float: left;"/>
                <a href="#" style="margin-left: 10px;">Chin Chuen</a>
                <p style="margin-left: 80px; color: #797979;">Hi Henson, I'll be glad to do a back rub for you.</p>
                <p style="margin-left: 80px; color: #797979;margin-top: -10px; padding-bottom: 10px;">10.15pm</p>
              </div>
            </div>
          </div>
            <div class="row" style="padding: 15px; margin-top: -20px;">
                <a style="margin-left: 0px;">Chin Chuen</a>
                <textarea type="text" cols="30" class="form-control" style="resize:none;"></textarea>
            </div>
        </div>
        <div class="col-lg-4 well" style="margin-left: 15px;">
            <img src="/img/henson.jpg" style="width: 70px; height: 70px; float: left;"/>
            <a style="margin-left: 10px;">Henson Tay</a>
            <p style="margin-left: 80px; color: #797979;">Crossfit Session</p>
            <p style="margin-left: 80px; color: #797979; margin-top: -10px;">11pm-12pm, 14/07/2014 at Pottruck Gym</p>
            <img src="/img/map2.png" style="width: 100%; margin-top: 15px;" value="Pottruck Health and Fitness Center University of Pennsylvania Philadelphia, PA 19104"/>
        </div>
      </div>
    </div>
    <footer style="padding: 15px 0 0 0; margin-top: 350px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#jobs">Jobs</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Modals -->
    <?php
		require_once("modal.php");
	?>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/ratings2.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/profile.js"></script>	
	<script src="js/logout.js"></script>
    <script>
   //     $('#loginModal').modal(options);
    </script>
</body>
</html>
