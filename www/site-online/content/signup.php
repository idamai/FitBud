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
		require_once ("navbar.php");
	?>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="text-align:center;">          
                <div class="alert alert-info">Signup for a SpotMe account</div>
            </div>
        </div>
		<form role = "form" id = "signup-form" action="/profile.php" method = "POST">
        	<div class="row">
				<div class="col-md-4">
					<h3>Personal Particulars</h3>
					<div class="form-group">
					    <input type = "text" class="form-control" name = "signupName" "id = "name-input" placeholder="Name">
			  		</div>
			  		<div class="form-group">
					    <input type = "email" class="form-control" name = "signupEmail" id = "email-input" placeholder="Email">
			  		</div>
			  		<div class="form-group">
					    <input type = "password" class="form-control" name = "signupPassword"id = "password-input" placeholder="Password">
			  		</div>
			  		<div class="form-group">
					    <input type = "password" class="form-control" name = "signupPasswordCfm" id = "password-cfm-input" placeholder="Confirm Password">
			  		</div>
			  		<div class="form-group">
					    <input type = "date" class="form-control" name = "signupBirthday" id = "birthday-input">
			  		</div>
			  		<div class="form-group">
					    <select class="form-control" name = "signupGender" id = "gender-input">
							<option value ="M">M</option>
							<option value ="M">F</option>
						</select>
			  		</div>
				</div>
				<div class="col-md-4">
					<h3>Where do you usually workout?</h3>
					<div class="form-group">
					    <input type = "text" class="form-control" name = "signupAddress1" id = "address1-input" placeholder="Address 1">
			  		</div>
			  		<div class="form-group">
					    <input type = "text" class="form-control" name = "signupAddress2" id = "address2-input" placeholder="Address 2">
			  		</div>
			  		<div class="form-group">
					    <input type = "text" class="form-control" name = "signupCity" id = "city-input" placeholder="City">
			  		</div>
			  		<div class="form-group">
					    <select class = "form-control" name = "signupState" id = "state-input">
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
			  		<div class="form-group">
					    <input type = "text" class="form-control" name = "signupCountry "id = "country-input" placeholder="Country">
			  		</div>
			  		<div class="form-group">
					    <input type = "text" class="form-control" name = "signupZip" id = "zip-input" placeholder="Zipcode">
			  		</div>
				</div>
				<div class="col-md-4">
					<div id="map-canvas" style = "height:320px; width:320px; margin-top: 20px;"></div>
				</div>
        	</div>
        	<br />
        	<div class="row">
				<div class="col-md-8">
					<div class="form-group">
					    <textarea class="form-control" id = "summary-input" placeholder="About Me"></textarea>
			  		</div>
			  		<div class="form-group">
					    <textarea class="form-control" id = "skills-input" placeholder="My Skills"></textarea>
			  		</div>
			  		<button type="submit" value="Submit" class = "btn btn-primary">Submit</button>
				</div>
        	</div>
		</form>
    </div>
    <footer style="padding: 15px 0 0 0; margin-top: 100px;">
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
    <!--no modals for sign up page-->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>	
    <script src="js/jquery.mask.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="js/signup.js"></script>
</body>
</html>
