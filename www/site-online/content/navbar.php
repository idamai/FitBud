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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php
						if (!isset($_SESSION['username'])) {
					?>
							<li><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Login</a>
							</li>
							
							<li><a href="#signupModal" data-toggle="modal" data-target="#signupModal">Signup</a>
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