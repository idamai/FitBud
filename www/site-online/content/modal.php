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
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="signupModal" id="signupModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Signup for a SpotMe Account</h4>
            </div>
            <form role="form">
                <div class="modal-body" style="padding-bottom: 5px;">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputFirstName2" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputLastName2" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail2" placeholder="E-mail Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: 0px;">
                    <button type="submit" class="btn btn-primary">Signup</button>
                </div>
            </form>
        </div>
      </div>
    </div>