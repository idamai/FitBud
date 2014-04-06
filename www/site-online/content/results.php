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
            <div class="col-md-4 col-md-offset-4" style="text-align:center;">          
                <div class="alert alert-info">You searched for trainers around zipcode <strong>19104</strong></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <i class="fa fa-user"></i> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Gender
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="list-group">
                              <a href="#" class="list-group-item">Male</a>
                              <a href="#" class="list-group-item">Female</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <i class="fa fa-info-circle"></i> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Status
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="list-group">
                              <a href="#" class="list-group-item">Casual</a>
                              <a href="#" class="list-group-item">Pro</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <i class="fa fa-signal"></i> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Activity
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="list-group">
                              <a href="#" class="list-group-item">Casual</a>
                              <a href="#" class="list-group-item">Pro</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <i class="fa fa-map-marker"></i> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              Location
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="list-group">
                              <a href="#" class="list-group-item">Casual</a>
                              <a href="#" class="list-group-item">Pro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/cc.jpg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Chin Chuen</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">endurance</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$60/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='4' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">65</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/jiarong.jpg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Jiarong</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">endurance</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$35/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='4' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">30</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/henson.jpg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Henson Tay</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$40/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='5' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">45</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/ignatius.jpg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Ignatius</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">yoga</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">taichi</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">taekwando</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$20/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='3' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">10</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/ce.jpg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Chris Evans</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">endurance</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$1000/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='5' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">99</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/rf.jpeg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Rich Froning</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$300/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='4' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">65</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
                </div>
            </div>
            <div class="col-md-2 well" style="margin: 0 15px 15px 15px;">
                <div style="text-align:center;">
                    <img src="/img/th.jpeg" alt="Texto Alternativo" class="img-thumbnail" style="height: 160px; width: 100%;">
                    <h3>Tony Horton</h3>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h4 style="color: #739e73;">$70/hr</h4>
                        <div id="stars-existing" class="starrr" data-rating='5' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">45</a>)</div>
                    <hr style="margin-top: 10px;"/>
                    <a href="#" class="btn btn-primary" title="Enlace" style="width: 100%;">View</a>
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
    <script>
   //     $('#loginModal').modal(options);
    </script>
</body>
</html>
