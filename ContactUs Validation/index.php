<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		.text-dark{
			font-weight:bold;
		}
		small{
			color: red;
		}
		
	</style>
</head>
<body>
<div class="container bg-light">

	<div class="d-flex justify-content-center bg-light m-5">
		<!-- Form  with HTML validation -->
		<form class="row " name="form" action="<?php echo htmlspecialchars("data.php");?>" method="post" onsubmit="return validateform()">
		<h2 class="ml-5">Contact Us!</h2>
		  <!-- Name -->
		  <div class="form-group col-md-12  px-5 ">
		    <label class="text-dark" for="name">Name </label>
		    <input type="text" class="form-control" name="name"  placeholder="Your Name" required>
		    <small id="err_name"></small>
		  </div>  
		  <!-- Email -->
		  <div class="form-group col-md-12  px-5">
		    <label class="text-dark" for="email">Email address</label>
		    <input type="email" class="form-control" name="email"  placeholder="Your Email address" required>
		    <small id="err_email"></small>
		  </div>
		  <!-- Subject -->
		  <div class="form-group col-md-12  px-5">
		    <label class="text-dark" for="subject">Subject</label>
		    <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject" required>
		    <small id="err_subject"></small>
		  </div>  
		  <!-- Message -->
		  <div class="form-group col-md-12  px-5">
		    <label class="text-dark" for="msg">Your Sweet Message</label>
		    <textarea class="form-control" rows="4" name="message" required></textarea>
		    <small id="err_message"></small>
		  </div>
		  <!-- Submit Button -->
		   <div class="form-group col-md-12  px-5">
			  <button type="submit" class="btn btn-success col-md-12  px-5" name="submit">Submit</button>
		  </div>
		 
		</form>

	</div>
.
</div>
<!-- JavaScript Validation -->
<script type="text/javascript">
	
	function validateform(){  
	let name=document.form.name.value;  
	let letters = /^[A-Za-z]+$/;
	let email=document.form.email.value;  
	let subject=document.form.subject.value;  
	let message=document.form.message.value;  
	
	let err = document.getElementById('err_name');

	if (! name.match(letters)){  
        err.innerHTML="Only Letters Allowed!";
	  return false;  
	} 
	}  
</script>
	
</body>
</html>