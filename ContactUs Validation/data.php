<?php 

if (isset($_POST['submit'])) {  
    echo "Submit button is clicked.";  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        echo "Data is sent using POST method ";  
    }  
} else {  
    echo "Data is not submitted"; 
    exit(); 
}  


// name validation

$name = $_POST['name'];
	if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
	    $ErrMsg = "Only alphabets and whitespace are allowed.";  
	    echo $ErrMsg;  
	    exit();
	}   

// email validation

$email = $_POST ["email"];  
	$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
	if (!preg_match ($pattern, $email) ){  
	    $ErrMsg = "Email is not valid.";  
	    echo $ErrMsg;  
	    exit();        
	} 
// Subject length validation

$subject = $_POST['subject'];
	$length = strlen($subject);  
	if ( $length < 5 && $length > 255) {  
	    $ErrMsg = "Subject must be bitween 5 and 255 character long ! ";  
	    echo $ErrMsg;
	    exit();  
	} 
$message = $_POST['message'];


 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<title></title>
 </head>
 <body>
 
<div class="container mt-5">
	
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
</div>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $subject ?></td>
		<td><?php echo $message ?></td>
 	</tr>
  </tbody>
</table>
<a href="index.php" class="btn btn-secondary">Contact Page</a>
 </body>
 </html>