<footer>
  <div class="container">
    <div class="row">
	  <div class="col-md-3 mb-4">
	    <h3> navigation </h3>
		<ul>
		  <li> <a href="#"> Home </a> </li>
          <li> <a href="#"> Parliament </a> </li>
		  <li> <a href="#"> Assembly </a> </li>
		  <li> <a href="#"> Polls </a> </li>
		  <li> <a href="#"> Join Us </a> </li>
		  <li> <a href="#"> Trending </a> </li>
		  <li> <a href="#"> Articles </a> </li>
		</ul>
	  </div>
	  <div class="col-md-3 mb-4">
	    <h3> POLITICAL LEADERS </h3>
		<ul>
		  <li> <a href="#"> Narendra Modi </a> </li>
          <li> <a href="#"> Randeep Singh </a> </li>
		  <li> <a href="#"> V. Kashiho Sangtam </a> </li>
		  <li> <a href="#"> Dharmendra Pradhan </a> </li>
		  <li> <a href="#"> Y. S. AVINASH REDDY </a> </li>
		  <li> <a href="#"> ARUN NARANG </a> </li>
		</ul>
	  </div>
	  <div class="col-md-3 mb-4">
	    <h3> POLITICAL PARTIES </h3>
		<ul>
		  <li> <a href="#"> Bharatiya Janata Party </a> </li>
          <li> <a href="#"> Indian National Congress </a> </li>
		  <li> <a href="#"> Aam Aadmi Party </a> </li>
		  <li> <a href="#"> Trinamool Congress </a> </li>
		  <li> <a href="#"> Janta Dal (United) </a> </li>
		  <li> <a href="#"> AIADMK </a> </li>
		</ul>
	  </div>
	  <div class="col-md-3 mb-4">
	    <h3> POLITICAL PARTIES </h3>
		<p> Stay connected on our latest news & articles by simply registering your email with us. </p>
		<div class="news_letter">
		  <input type="text" placeholder="Enter your Email Address">
		  <button type="Submit"> GO </button>
		</div>
	  </div>
	</div>
	<div class="copy_right_foot">
	  <div class="row align-items-center">
	    <div class="col-md-4 col-12">
		</div>
		<div class="col-md-4 col-12 text-center">
		  © 2019 rawpolitics. All Rights Reserved.
		</div>
		<div class="col-md-4 col-12">
		  <ul class="socal_sharing text-right">
		    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
			<li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
			<li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
		  </ul>
		</div>
	  </div>
	</div>
  </div>
</footer>

<div class="login_popup">
<div class="modal fade" id="ModalCenteredScrollable" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">	  
      <div class="modal-header">	
        <h4 id="login_reg_for"> Member Login </h4>	  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="public/images/cross_btn.png">
        </button>
      </div>
      <div class="modal-body" id="login_registeration">	
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
		  <li class="nav-item">
			<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">LOGIN</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">REGISTER</a>
		  </li>
		</ul>	  
		<div class="tab-content" id="pills-tabContent">
		  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		    <form>
			  <div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username or E-mail">
			  </div>
			  <div class="form-group">
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Login</button>
			  <div class="forget_pass" onclick> <a href="#" onclick="return displayForgot()" tabindex="5">Forgot Password?</a> </div>
			  
			  
			  
			</form>
			<div class="login_with_gm">
			  <img src="public/images/login.jpg">
			</div>
		  </div>



		    



		  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		    <form class="regis-form">
				<div class="form-group">
					<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		  </div>
		</div>        
      </div>





      	<div class="modal-body" id="forgot_pwd" style="display: none;">	
      		<div class="tab-pane fade show active" id="pills-profile-forgot-pwd" role="tabpanel" aria-labelledby="pills-profile-tab">
			    <form class="regis-form">
					<div class="password_forget">
	                  <p>You can reset your password here.</p>
	                    <form>    
	                      <div class="form-group">
	                        <div class="input-group">
	                          <input id="email" name="email" placeholder="Email address" class="form-control"  type="email">
	                        </div>
	                      </div>
	                      <div class="form-group">
	                        <button name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit"> Submit</button>
	                        <div class="forget_pass" > <a href="#" onclick="return displayloginregistration()" tabindex="5">Login/Registration</a> </div>
	                      </div>
	                      
	                      <input type="hidden" class="hide" name="token" id="token" value=""> 
	                    </form>
	                </div>
				</form>
		    </div>
		</div>







    </div>
  </div>
</div>
</div>

<div class="compare_popup login_popup">
<div class="modal fade" id="compare_outer" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">	  
      <div class="modal-header">	
        <h4> Compare </h4>	  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="public/images/cross_btn.png">
        </button>
      </div>
      <div class="modal-body">	
        <div class="row">
		  <div class="col-md-2">
		    <div class="comp_box">
			  <div class="comp_img">
			    <img src="public/images/pol-1.jpg" class="d-block w-100">
			  </div>
			  <div class="comp_cont">
			    <h6> Adhalrao Shivaji Dattatrey </h6>
			  </div>
			</div>
		  </div>
		  <div class="col-md-2">
		    <div class="comp_box">
			  <div class="comp_img">
			    <img src="public/images/pol-2.jpg" class="d-block w-100">
			  </div>
			  <div class="comp_cont">
			    <h6> Arun Narang </h6>
			  </div>
			</div>
		  </div>
		  <div class="col-md-2">
		    <div class="comp_box">
			  <div class="comp_img">
			    <img src="public/images/pol-3.jpg" class="d-block w-100">
			  </div>
			  <div class="comp_cont">
			    <h6> V. Kashiho Sangtam </h6>
			  </div>
			</div>
		  </div>
		  <div class="col-md-2">
		    <div class="comp_box">
			  <div class="comp_img">
			    <img src="public/images/pol-4.jpg" class="d-block w-100">
			  </div>
			  <div class="comp_cont">
			    <h6> Y. S. Avinash Reddy </h6>
			  </div>
			</div>
		  </div>
		  <div class="col-md-4">
		    <div class="compare_now"> <a href="#" class="btn"> Compare <i class="fas fa-plus"></i> </a> </div>
		  </div>
		</div>	  
		<!-- <form>
		  <div class="form-group">
		    <div class="arrow_input"> 
			  <input class="form-control" type="text" placeholder="Select Type">
		    </div>
		  </div>
		  <div class="form-group">
			<div class="arrow_input"> 
			  <input class="form-control" type="text" placeholder="Select Type">
		    </div>
		  </div>
		  <div class="form-group">
			<div class="arrow_input"> 
			  <input class="form-control" type="text" placeholder="Select Type">
		    </div>
		  </div>
		 <button type="submit" class="btn btn-primary">Submit</button>		  	  
		</form>  -->   
        		
      </div>
    </div>
  </div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	
	function displayForgot() {
		$("#login_reg_for").html('Forgot Password?');
		$("#forgot_pwd").show();
		$("#login_registeration").hide();
		
	}

	function displayloginregistration() {
		$("#login_reg_for").html('Member Login');
		$("#forgot_pwd").hide();
		$("#login_registeration").show();

	}



	/*  compare api */

	/// <reference path="jquery-1.12.3.js" />


</script>