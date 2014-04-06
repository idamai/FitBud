<?php
	require_once ("../system/settings.php");
	require_once("../system/db_login.php");
	$conn =  dbconnect($dbconn);

	$username = $_GET['email'];
	$pass = md5($_GET['password']);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpotMe - Chuan Xin</title>

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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding: 5px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://startbootstrap.com"><img src="/img/logo.png" style="height: 25px; padding: 0px;"/></a>
            </div>
            <div class="collapse navbar-collapse navbar-left">
                <form class="navbar-form">
                    <input type="text" class="form-control" placeholder="Search trainers by zipcode" style="width: 300px;">
                </form>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Login</a>
                    </li>
                    <li><a href="#signupModal" data-toggle="modal" data-target="#signupModal">Signup</a>
                    </li>
                </ul>
            </div>
            -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
					<?php
						if (!isset($_SESSION['username'])) {
					?>
							<li><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Login</a>
							</li>
							
							<li><a href="#signupModal" data-toggle="modal" data-target="#signupModal">Signup</a>
							</li>					
							<li><a href="#paymentModal" data-toggle="modal" data-target="#paymentModal">Payment</a>
							</li>
					<?php
						}
					?>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="margin-top: 80px; margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-3 well" style="margin: 15px; margin-top: 0px;">
                <div style="text-align:center;">
                    <img src="/img/cc.jpg" alt="Texto Alternativo" class="img-thumbnail">
                    <h2>Chin Chuen <a href="#" style="font-size: 16px;"><i class="fa fa-facebook-square"></i></a> <a href="#" style="font-size: 16px;"><i class="fa fa-twitter-square"></i></a></h2>
                    <div>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">strength</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">cardio</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">crossfit</a>
                        <a href="#" class="btn btn-default btn-xs" style="margin-top:2px;">endurance</a>
                    </div>
                    <hr style="margin-bottom: 10px;"/>
                        <h1 style="color: #739e73;">$60/hr</h1>
                        <div id="stars-existing" class="starrr" data-rating='4' style="color: #797979;">Ratings </div>
                        <div style="color: #797979;">Reviews (<a href="#">65</a>)</div>
                    <hr style="margin-top: 10px;"/>
					<?php
						if (isset($_SESSION['username'])) {
					?>
						<a href="#bookModal" data-toggle="modal" data-target="#bookModal" class="btn btn-primary btn-lg" title="Enlace" style="width: 100%;">Request Session</a>
					<?php
						}
					?>                    
                </div>
            </div>
            <div class="col-md-8 well" style="padding-top: 0px; margin: 0 15px 0 15px;">
                <h3>About Me</h3>
                <hr />
                <p style="color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3>Endorsements</h3>
                <hr />
                <div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">strength</button>
                      <button type="button" class="btn btn-danger">
                        5
                      </button>
                    </div>
                    <?php
						if (isset($_SESSION['username'])) {
					?>
						<a href="#"><i class="fa fa-plus"></i> Endorse</a>
					<?php
						}
					?>
                    <div style="float: right;">
                        <img src="/img/test.jpg" style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/>
                    </div>
                </div>
                <div style="margin-top: 5px;">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">cardio</button>
                      <button type="button" class="btn btn-danger">
                        5
                      </button>
                    </div>
                    <?php
						if (isset($_SESSION['username'])) {
					?>
						<a href="#"><i class="fa fa-plus"></i> Endorse</a>
					<?php
						}
					?>
                    <div style="float: right;">
                        <img src="/img/test.jpg" style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/>
                    </div>
                </div>
                <div style="margin-top: 5px;">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">crossfit</button>
                      <button type="button" class="btn btn-danger">
                        5
                      </button>
                    </div>
					<?php
						if (isset($_SESSION['username'])) {
					?>
						<a href="#"><i class="fa fa-plus"></i> Endorse</a>
					<?php
						}
					?>
                    <div style="float: right;">
                        <img src="/img/test.jpg" style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/>
                    </div>
                </div>
                <div style="margin-top: 5px;">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">endurance</button>
                      <button type="button" class="btn btn-danger">
                        5
                      </button>
                    </div>
                    <?php
						if (isset($_SESSION['username'])) {
					?>
						<a href="#"><i class="fa fa-plus"></i> Endorse</a>
					<?php
						}
					?>
                    <div style="float: right;">
                        <img src="/img/test.jpg" style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/><img src="/img/test.jpg"  style="margin-left: 5px;"/>
                    </div>
                </div>
                <h3>Gyms I Frequent</h3>
                <hr />
                <img src="/img/map.png" style="width: 100%;" value="Pottruck Health and Fitness Center University of Pennsylvania Philadelphia, PA 19104"/>
                <h3>Latest Reviews <a href="#" style="font-size: 14px;">See all</a></h3>
                <hr />
                <div>
                    <div style="float:left;">
                        <img src="/img/cx.jpg" style="width: 60px; height: 60px;"/>
                    </div>
                    <div style="margin-left: 70px;">
                        <a href="#">Chuan Xin</a>
                        <p style="color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <br />
                <div>
                    <div style="float:left;">
                        <img src="/img/shaz.jpg" style="width: 60px; height: 60px;"/>
                    </div>
                    <div style="margin-left: 70px;">
                        <a href="#">Shazwi Suwandi</a>
                        <p style="color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <br />
                <div>
                    <div style="float:left;">
                        <img src="/img/henson.jpg" style="width: 60px; height: 60px;"/>
                    </div>
                    <div style="margin-left: 70px;">
                        <a href="#">Henson Tay</a>
                        <p style="color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bookModal" id="bookModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Book a workout session with Chuan Xin</h4>
            </div>
            <div class="modal-body" style="padding-bottom: 5px;">
                <div class="form-group">
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-lg-6">
                            <label>Please pick the right date and time.</label>
                            <div class='input-group date' id='datetimepicker1' style="width: 200px;">
                                <input type='text' class="form-control"/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Choose the type of session.</label>
                            <br />
                            <div class="btn-group">
                              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" style="">
                                Session Type <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:-10px;">
                        <div class="col-lg-6">
                            <label>Location</label>
                            <p style="color: #797979;">Pottruck Health and Fitness Center University of Pennsylvania Philadelphia, PA 19104</p>
                        </div>
                    </div>
                    <br />
                    <label>Leave Chuanxin a brief message to describe what you need.</label>
                    <textarea class="form-control" rows="5" style="resize: none; color: #797979;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 0px;">
                <button type="submit" class="btn btn-primary">Request Session</button>
            </div>
        </div>
      </div>
    </div>
	<!--Login-->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="loginModal" method = "POST" id="loginModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login to SpotMe</h4>
            </div>
            <form role="form">
                <div class="modal-body" style="padding-bottom: 5px;">
                    <div class="form-group">
                        <input type="email" class="form-control"  name = "email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: 0px;">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
      </div>
    </div>
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="paymentModal" id="paymentModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Select Payment Method</h4>
            </div>
            <form role="form" id="payment-form">
                <div class="modal-body" style="padding-bottom: 5px;">
                    <div class="form-group">
                        <input type="text" class="form-control" id="card-number" name="cardNumber" placeholder="Card Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="card-name" name="cardName" placeholder="Card's Holder Name">
                    </div>
					<!--PUT LOGOS HERE -->
					<div class = " row col-md-10 col-md-offset-1">
						<img src="img/32/mastercard.png" />
						<img src="img/32/visa.png" />
						<img src="img/32/maestro.png" />
						<img src="img/32/amex.png" />
						<img src="img/32/google-wallet.png" />
					</div>
					<div style="clear:both"></div>
					<br/>
					<div class = "row">
						<div class =  "col-md-7">
							<label>Card Expiry:</label>
						</div>
						<div class =  "col-md-5">
							<label>CVV:</label>
						</div>
					</div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="cardExpMonth" id="card-exp-month" placeholder="MM">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="cardExpYear" id="card-exp-year" placeholder="YY">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="cardCvv" id="card-cvv" placeholder="CVV">
                    </div>
					<div style = "clear:both"></div> 
					<div  id ="payment-errors"></div>
                </div>
                <div class="modal-footer" style="margin-top: 0px;">
                    <button type="button" id="cancel-payment" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-primary">Secure Pay</button>
                </div>	
            </form>
        </div>
      </div>
    </div>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/ratings.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/profile.js"></script>
</body>
</html>
<?php
	dbclose($conn);
?>