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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpotMe</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/accordion.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link href="css/results.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
</head>
<body>
    <?php
		require_once ("navbar.php");
	?>
    <div class="container" style="margin-top: 80px; margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-3 well" style="margin: 15px; margin-top: 0px;">
                <div style="text-align:center;">
                    <img src="/img/shaz.jpg" alt="Texto Alternativo" class="img-thumbnail">
                    <h2>Shazwi <a href="#" style="font-size: 16px;"><i class="fa fa-facebook-square"></i></a> <a href="#" style="font-size: 16px;"><i class="fa fa-twitter-square"></i></a></h2>
                    <div>
                        <a href="#" class="btn btn-warning btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-warning btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-warning btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-warning btn-xs" style="margin-top:2px;">endurance</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <div id="stars-existing" class="starrr" data-rating='4' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">65</a>)</div>
                </div>
            </div>
            <div class="col-md-8 well" style="padding-top: 0px; margin: 0 15px 0 15px;">
                <h3>About Me</h3>
                <hr />
                <textarea class="form-control" rows="5" style="resize: none; color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                <h3>Training Offered</h3>
                <hr />
                    <div class="btn-group" style="margin-bottom: 5px;">
                      <button type="button" class="btn btn-warning">strength</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="btn-group" style="margin-bottom: 5px;">
                      <button type="button" class="btn btn-warning">cardio</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="btn-group" style="margin-bottom: 5px;">
                      <button type="button" class="btn btn-warning">crossfit</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="btn-group" style="margin-bottom: 5px;">
                      <button type="button" class="btn btn-warning">endurance</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <a href="#" id="addOffering"><i class="fa fa-plus" style="margin-left: 10px;"> Add offering</i></a>
                <h3>Charging Rate</h3>
                <hr />
                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group" style="margin-bottom: 5px;">
                          <span class="input-group-addon" style="background: white;"><i class="fa fa-dollar"></i></span>
                          <input type="text" class="form-control" placeholder="Charging rate">
                          <span class="input-group-addon" style="background: white;">/hr</span>
                        </div>
                    </div>
                </div>
                <h3>Social Networks</h3>
                <hr />
                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-group" style="margin-bottom: 5px;">
                          <span class="input-group-addon" style="background: white;"><i class="fa fa-facebook-square"></i></span>
                          <input type="text" class="form-control" placeholder="Facebook username">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group" style="margin-bottom: 5px;">
                          <span class="input-group-addon" style="background: white;"><i class="fa fa-twitter-square"></i></span>
                          <input type="text" class="form-control" placeholder="Twitter username">
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-danger">Update Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="padding: 15px 0 0 0;">
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
    <script src="js/ratings.js"></script>
    <script src="js/ratings2.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/profile.js"></script>
    <script src="js/payment.js"></script>	
	<script src="js/logout.js"></script>
    <script>
        $('#bookModal').modal(options);
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
            $('#addOffering').click(function() {
                $("#addOffering").before("<input type='text' class='form-control2' style='width: 20%; margin-right: 5px; margin-bottom: 5px;'/>");
            });
        });
    </script>
</body>
</html>
