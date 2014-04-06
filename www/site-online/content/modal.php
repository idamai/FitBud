<!--Login-->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="loginModal" id="loginModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login to SpotMe</h4>
            </div>
            <form role="form" method = "post" >
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
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="paymentModal" id="paymentModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Complete your pending session</h4>
            </div>
            <form role="form" id="payment-form">
                <div class="modal-body" style="padding-bottom: 5px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="margin:0px; margin-bottom: 15px;">Your session details</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/img/henson.jpg" style="width: 70px; height: 70px; float: left;"/>
                            <p style="margin-left: 80px;">Henson Tay</p>
                            <p style="margin-left: 80px; color: #797979; margin-top: -10px;">Crossfit Session</p>
                            <p style="margin-left: 80px; color: #797979; margin-top: -10px;">11pm-12pm, 14/07/2014 at Pottruck Gym</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-lg-12">
                            <img src="/img/map.png" style="width: 100%;" value="Pottruck Health and Fitness Center University of Pennsylvania Philadelphia, PA 19104"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-lg-12">
                            <h5 style="margin:0px; margin-bottom: 15px;">Enter credit card details</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="card-name" name="cardName" placeholder="Card's Holder Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="card-number" name="cardNumber" placeholder="Card Number">
                            </div>
                        </div>
                    </div>
                    <div class = "row" style="margin-bottom: 15px;">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="cardExpMonth" id="card-exp-month" placeholder="MM">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="cardExpYear" id="card-exp-year" placeholder="YY">
                        </div>
                        <div class =  "col-lg-4">
                            <input type="text" class="form-control" name="cardCvv" id="card-cvv" placeholder="CVV">
                        </div>
                    </div>
                    <!--PUT LOGOS HERE -->
                    <div class="row" style="margin-bottom: 15px;">
                        <div class="col-lg-6">
                            <img src="img/32/mastercard.png" />
                            <img src="img/32/visa.png" />
                            <img src="img/32/maestro.png" />
                            <img src="img/32/amex.png" />
                            <img src="img/32/google-wallet.png" />
                        </div>
                        <div class="col-lg-6">
                            <div id ="payment-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="margin:0px; margin-bottom: 15px; float:left;">Leave ratings & review</h5><div id="stars" class="starrr" style="margin-left: 150px; color: #ffb709;"></div>
                            <textarea class="form-control" rows="5" style="resize: none; color: #797979; margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: 0px;">
                    <button type="submit" class="btn btn-primary">Secure Pay</button>
                </div>  
            </form>
        </div>
      </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="requestModal" id="requestModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Accept/Reject a request</h4>
            </div>
            <form role="form" id="request-form">
                <div class="modal-body" style="padding-bottom: 5px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 style="margin:0px; margin-bottom: 15px;">Your session details</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/img/henson.jpg" style="width: 70px; height: 70px; float: left;"/>
                            <p style="margin-left: 80px;">Henson Tay</p>
                            <p style="margin-left: 80px; color: #797979; margin-top: -10px;">Crossfit Session</p>
                            <p style="margin-left: 80px; color: #797979; margin-top: -10px;">11pm-12pm, 14/07/2014 at Pottruck Gym</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="/img/map.png" style="width: 100%;" value="Pottruck Health and Fitness Center University of Pennsylvania Philadelphia, PA 19104"/>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-lg-12">
                            <h5 style="margin:0px; margin-bottom: 15px; float:left;">Message from Henson Tay</h5>
                            <textarea class="form-control" rows="5" style="resize: none; color: #797979; margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: 0px;">
                    <button type="submit" class="btn btn-danger">Reject Request</button>
                    <button type="submit" class="btn btn-primary">Accept Request</button>
                </div>  
            </form>
        </div>
      </div>
    </div>
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
