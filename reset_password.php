<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>

	<div class="container-fluid wrapper">

		<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="#">CHASE</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Paymentech <span class="sr-only">(current)</span></a>
		      </li>
		     <!--  <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li> -->

		     
		        

		  </div>
		</nav>
			
		</div>

		<div class="container user-form">

			<h4>Change Your Password</h4>

			<p><small>Please complete the following form to complete your password</small></p>


			<div class="row">

			  <div class="col-6 reset-form">
			  	<form method="post">

				 

				  <div class="form-group row">
				    <label for="inputPassword" class="col-sm-4 col-form-label">Username</label>
				    <div class="col-sm-7">

				    	<div class="input-group">
				    	  
				    	  <input type="text" name="username" class="form-control" placeholder="Username" />
				    	  <span class="icon">
				    	    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
				    	  </span>
				    	</div>
				    	
				      <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Username"> -->
				    </div>
				  </div>

				   <div class="form-group row">
				    <label for="inputPassword" class="col-sm-4 col-form-label">Expired Password</label>
				    <div class="col-sm-7">
				    	<div class="input-group">
				    	  
		    	   <input type="password" name="expired" class="form-control" id="inputPassword" 
				      placeholder="Expired Password">
				    	  <span class="icon">
				    	    <i class="fa fa-unlock" aria-hidden="true"></i>
				    	  </span>
				    	</div>
				    
				    </div>
				  </div>

				   <div class="form-group row">
				    <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
				    <div class="col-sm-7">
				    	<div class="input-group">
				    	 
    	 		      <input type="password" name="new_password" class="form-control" id="inputPassword" placeholder="New Password"
				    	 > 
				    	 
				    	  <span class="icon">
				    	    <i class="fa fa-unlock" aria-hidden="true"></i>
				    	  </span>
				    	</div>
				      
				    </div>
				  </div>

				   <div class="form-group row">
				    <label for="inputPassword" class="col-sm-4 col-form-label">Verify New Password</label>
				    <div class="col-sm-7">
				    	<div class="input-group">
				    	  
	    	 <input type="password" name="verify_password" class="form-control" id="inputPassword"
				    	 placeholder="Verify New Password">
				    	  <span class="icon">
				    	    <i class="fa fa-unlock" aria-hidden="true"></i>
				    	  </span>
				    	</div>
				    
				    </div>
				  </div>

				  <div class="form-group row">
				  	 <label for="inputPassword" class="col-sm-4 col-form-label"></label>
				  	<div class="col-sm-5">
				     <button type="submit" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-secondary">Cancel</button>
				    </div>
				  </div>


				</form>
			  </div>

			  <div class="col-6 tips">

			  	<p class="help">Helpful Tips</p>
			  	<br>
			  	<p class="security">For security reasons, new password must meet the following requirements:</p>
			  	<ul class="info">
			  	  <li>must be between 8 and 40 characters in length</li>
			  	  <li>must contain at least one uppercase letter,one lowercase character and one number</li>
			  	  <li>cannot be a previously used password</li>
			  	  <li>avoid using special characters{?,.+)(*&^%$)}</li>
			  	  <li>Cannot be your username</li>
			  	</ul>
			  	<br>
			  	<p class="enhanced">For enhanced security,do not use proper names, words commonly found in the dictionary or numbers</p>

			  	
			  </div>


			</div>

			
		</div>



		
	</div>

	<!-- footer -->
	<!--  <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer> -->
	

	


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>