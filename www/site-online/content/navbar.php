<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding: 5px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8888"><img src="/img/logo.png" style="height: 25px; margin-top: -5px;"/></a>
            </div>

            <div class="collapse navbar-collapse navbar-left" id="search">
                <form class="navbar-form">
                    <input type="text" class="form-control" placeholder="Search trainers by zipcode" style="width: 300px;">
                </form>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php
						if (!isset($_SESSION['username'])) {
					?>
							<li><a href="#loginModal" data-toggle="modal" data-target="#loginModal" style="color: white;"><i class="fa fa-lock"></i> Login</a>
							</li>
							
							<li><a href="/signup.php" style="color: white;">Signup</a>
							</li>
					<?php
						} else {
					?>
						<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="profile" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">Shazwi Suwandi <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="/profile.php"><i class="fa fa-list-alt"></i> Profile</a></li>
										<li><a href="/edit_profile.php"><i class="fa fa-cog"></i> Settings</a></li>
										<li class="divider"></li>
										<li><a href="/logout"><i class="fa fa-power-off"></i> Logout</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								<a href="profile" class="activity-dropdown" data-toggle="dropdown"><i class="fa fa-bell" style="color: white;"></i> <span class="badge bg-color-red">1</span></a>
								<ul class="dropdown-menu" style="width: 400px; max-height: 315px;">
								  <li style="padding-left: 10px; margin-bottom: -5px; font-weight: bold; color: #333333;" id="notifications">Notifications</li>
								  <li class="divider" style="margin-bottom: 0px;"></li>
								  <a href="#requestModal" data-toggle="modal" data-target="#requestModal" style="padding: 0px;">
									<li style="padding-left: 10px; padding-bottom: 5px; padding-top:10px;" class="unseen">
									  <img src="/img/henson.jpg" style="float: left; width: 40px; height: 40px;"/>
									  <div style="color: #787878; margin-left: 50px; padding-right: 10px;"> <strong style="color: black;">Henson Tay</strong> requested a crossfit session at <strong>Pottruck Gym</strong> for <strong>14/07/2014 | 2pm - 3pm</strong>. <br /> <p style="font-size: 0.8em;">1 day ago</p></div>
									</li>
								  </a>
								</ul>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								<a href="profile" class="activity-dropdown" data-toggle="dropdown"><i class="fa fa-envelope" style="color: white;"></i> <span class="badge bg-color-red">1</span></a>
								<ul class="dropdown-menu" style="width: 400px; max-height: 315px;">
								  <li style="padding-left: 10px; margin-bottom: -5px; font-weight: bold; color: #333333;" id="notifications">Messages</li>
								  <li class="divider" style="margin-bottom: 0px;"></li>
									<a href="#" style="padding: 0px;">
									  <li style="padding-left: 10px; padding-bottom: 5px; padding-top:10px;">
										<img src="/img/henson.jpg" style="float: left; width: 40px; height: 40px;"/>
										<div style="color: #787878; margin-left: 50px; padding-right: 10px;"> 
										  <strong style="color: black;"> 
										  Henson Tay
										  </strong>
										  <br /> 
										  <p style="padding: 0px; margin: 0px;">Test</p>
										  <p style="font-size: 0.8em;">10:49pm</p>
										</div>
									  </li>
									</a>
								</ul>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right" style="padding-right: 15px;">
							  <li class="dropdown">
								<a href="profile" class="activity-dropdown" data-toggle="dropdown"><i class="fa fa-exclamation-triangle" style="color: white;"></i> <span class="badge bg-color-red">1</span></a>
								<ul class="dropdown-menu" style="width: 400px; max-height: 315px;">
								  <li style="padding-left: 10px; margin-bottom: -5px; font-weight: bold; color: #333333;" id="notifications">Pending Sessions</li>
								  <li class="divider" style="margin-bottom: 0px;"></li>
									<a href="#paymentModal" data-toggle="modal" data-target="#paymentModal" style="padding: 0px;">
									  <li style="padding-left: 10px; padding-bottom: 5px; padding-top:10px;">
										<img src="/img/cc.jpg" style="float: left; width: 40px;"/>
										<div style="color: #787878; margin-left: 50px; padding-right: 10px;"> 
										  <strong style="color: black;"> 
										  Chin Chuen
										  </strong>
										  <br /> 
										  <p style="padding: 0px; margin: 0px;">Crossfit Session at <strong>Pottruck Gym</strong> for <strong>14/07/2014 | 11pm - 12pm</strong></p>
										  <p style="font-size: 0.8em;">1 day ago</p>
										</div>
									  </li>
									</a>
								</ul>
							  </li>
							</ul>
						</div>
					<?php
						}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
 </nav>