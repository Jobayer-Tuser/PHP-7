<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');
?>

<div class="container">
  <h2>Student Registratio Form</h2>
  
  <?php
	if(isset($_POST['add_student']))
	{
		$query = $conn1->prepare("
			INSERT INTO `users` (`full_name`, `age`, `phone_no`, `full_address`, `job`, `salary`, `email_id`, `password`) VALUES
			(:FULL_NAME, :AGE, :PHONE_NO, :FULL_ADDRESS, :JOB, :SALARY, :EMAIL_ID, :PASSWORD);
		");

		$valToBind = array(
			':FULL_NAME' => $_POST['full_name'], 
			':AGE' => $_POST['age'], 
			':PHONE_NO' => $_POST['phone_no'],
			':FULL_ADDRESS' => $_POST['full_address'], 
			':JOB' => $_POST['job'], 
			':SALARY' => $_POST['salary'], 
			':EMAIL_ID' => $_POST['email_id'],
			':PASSWORD' => $_POST['password']
		);

		$query->execute($valToBind);

		$rowNumber = $query->rowCount();
		
		if($rowNumber > 0)
			echo '
				<div class="alert alert-success">
				  The student is registered successfully!
				  </div>
			';
		else
			echo '
				<div class="alert alert-danger">
				  Sorry unable to save the student!
				  </div>
			';
	}
  ?>
  
  
  <form class="form-horizontal" action="" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" >Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="full_name">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="age">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Phone No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone_no">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="full_address">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Job:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="job">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Salary:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="salary">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email_id">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Password:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="add_student">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
