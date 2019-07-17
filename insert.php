
<?php 


include "conn.php";
if(isset($_POST['done'])){
	$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$date=$_POST['date'];


	

	$q="insert into tabel (firstname,lastname, email, age, date) VALUES ('$firstname','$lastname','$email','$age','$date')";


 $query=mysqli_query($con,$q);



}
?>




<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<form method="post">
	<br><br>		<div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> EDIT</h1>

				</div>
                 <label>FIRSTNAME</label>
                 <input type="text"name="firstname" class="form-control"><br>
			
<label>LASTNAME</label>
                 <input type="text"name="lastname" class="form-control"></input><br>
<label>EMAILADRESS </label>
                 <input type="text"name="email" class="form-control"><br>
<label>AGE</label>
                 <input type="text"name="age" class="form-control"><br>
<label>DATE</label>
                 <input type="text"name="date" class="form-control"><br>

                 <button class="btn btn-success" type="submit" name="done">SUBMIT</button><br>
			

</div>
</form>
</div>
</body>
</html>