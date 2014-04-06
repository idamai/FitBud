<!DOCTYPE html>
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding: 5px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SpotMe</a>
            </div>
            <div class="collapse navbar-collapse navbar-left">
                <form class="navbar-form">
                    <input type="text" class="form-control" placeholder="Search trainers by zipcode" style="width: 300px;">
                </form>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- no dropdown for sign up page -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="text-align:center;">          
                <h2>Sign Up</h2>
            </div>
        </div>
		<form role = "form" action="/profile.php" method = "POST">
			<div class = "form-group pull-left col-md-4">
				<div class = "row">
					<h3>Personal Particulars</h3>
				</div>
				<label for = "name-input">Name: </label><input type = "text" class="form-control" id = "name-input">
				<label for = "email-input">Email: </label><input type = "email" class="form-control" id = "email-input">
				<label for = "password-input">Password: </label><input type = "email" class="form-control" id = "password-input">
				<label for = "password-cfm-input">Confirm Password: </label><input type = "email" class="form-control" id = "password-cfm-input">
				<label for = "birthday-input">Birthday: </label><input type = "date" class="form-control" id = "brithday-input">
				<label for = "gender-input">Gender: </label>
					<select class="form-control" id = "email-input">
						<option value ="M">M</option>
						<option value ="M">F</option>
					</select>
			</div>
			<div class = "form-group pull-right col-md-8">
				<div class = "row">
					<h3>I am working out at...</h3>
				</div>
				<div class ="col-md-6 ">
					<label for = "address1-input">Address 1: </label><input type = "text" class="form-control" id = "address1-input">
					<label for = "address2-input">Address 2: </label><input type = "text" class="form-control" id = "address2-input">
					<label for = "city-input">City: </label><input type = "text" class="form-control" id = "city-input">
					<div class = "col-md-8">
						<label for = "state-input">State: </label>
							<select class = "form-control" id = "state-input">
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>
					</div>
					<div class = "col-md-4">
						<label for = "zip-input">Zip Code: </label><input type = "text" class="form-control" id = "zip-input">
					</div>
				</div>
				<div class = "col-md-4 pull-left">
					<br/>
					<div id="map-canvas" style = "height:320px; width:320px"></div>
				</div>
			</div>
			<div style="clear : both"></div>
			<div class = "form-group" >
				<div class = "row">
					<h3>About me...</h3>
				</div>
				<div class = "row col-md-12  col-md-offset-0">
					<label for = "summary-input">Summary: </label><textarea class="form-control" id = "summary-input"></textarea>
				</div>
				<div class = "row col-md-12 col-md-offset-0">
					<label for = "offering-input">Training offered: </label><textarea class="form-control" id = "offering-input"></textarea>
				</div>
				<div class = "row col-md-12 col-md-offset-0">
					<label for = "endorsement-input">Endorsement: </label><textarea class="form-control" id = "endorsement-input"></textarea>
				</div>
			</div>
			<div class = "form-group row">
				<button type="submit" value="Submit" class = "btn btn-default">Submit
			</div>
		</form>
    </div>
    <footer>
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
                        <li><a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2013. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Modals -->
    <!--no modals for sign up page-->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/signup.js"></script>
</body>
</html>
