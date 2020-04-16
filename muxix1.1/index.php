<?php include_once 'templates/header.php'; ?>
<div class="container text-center">
 <div class="row">
 	<div class="col-sm-5">f</div>
 	<div class="col-sm-2 ch_psition">
 	 <i class="fas fa-headphones-alt fa-4x mb-3"></i>
 	 <h3 class="mb-3 ch_bold">Login To MUXIX</h3>
	 <form>
	  <div class="form-group">
	    
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted"><i class="fas fa-lock"></i> We'll never share your email</small>
	  </div>
	  <div class="form-group">
	    
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
	  </div>
	 
	  <button type="submit" class="btn blue btn-block">Submit</button>
	</form>
	<span class="float-left"><a href="javascript:void(0)" data-toggle="modal" data-target="#register"> Sign in</a></span>  <span class="float-right"><a href="javascript:void(0)" data-toggle="modal" data-target="#forgot">Forgot password</a></span>
	 </div>
 	<div class="col-sm-5">
 	
 </div>
 	
 </div>	
</div>


<!-- Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-headphones-alt"></i> &nbsp;Register to MUXIX</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
		    <form id="register_form">
		    	<div class="form-group">
			    
			    <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="emailHelp" placeholder="Enter name">
			    <span id="name_error" class="ch_error"></span>
			   
			  </div>
			  <div class="form-group">
			    
			    <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
			    <span id="email_error" class="ch_error"></span>
			  </div>
			  <div class="form-group">
			    
			    <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Enter password">
			    <span id="pass_error" class="ch_error"></span>
			  </div>
			 
			 
			</form>
        </div>
      </div>
      <div class="modal-footer">
      	<p class="float-left" id="msg"></p>
        <button type="button" class="btn red" id="verify_ajax">Register</button>
        <button class="btn red" type="button" disabled id="spinner">
		  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
		  Hold on...
		</button>
        </div>
     </div>
   </div>
</div>

<!-- forgot-->
<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-headphones-alt"></i> &nbsp;Forgot passwowrd</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
		    <form>
		    	
			  <div class="form-group">
			    
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			   
			  </div>
			  <div class="form-group">
			    
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New password">
			  </div>
			 
			 
			</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn red">change password</button>
      </div>
    </div>
  </div>
</div>
<?php include_once 'templates/footer.php'; ?>