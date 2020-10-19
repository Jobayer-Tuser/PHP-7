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
# ======================== DATABASE CONNECTION
$conn1 = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');
?>

<div class="container">
  <h2>Update Student Information</h2>
  
  <?php
  # ======================== UPDATE NEW DATA TO THE DATABASE
	if(isset($_POST['update_student']))
	{
		$query = $conn1->prepare("
			UPDATE `users` 
				SET `full_name` = :FULL_NAME, 
					`age` = :AGE, 
					`phone_no` = :PHONE_NO, 
					`full_address` = :FULL_ADDRESS, 
					`job` = :JOB, 
					`salary` = :SALARY, 
					`email_id` = :EMAIL_ID
				WHERE `id` = :ID
		");

		$valToBind = array(
			':FULL_NAME' => $_POST['full_name'],
			':AGE' => $_POST['age'],
			':PHONE_NO' => $_POST['phone_no'],
			':FULL_ADDRESS' => $_POST['full_address'],
			':JOB' => $_POST['job'],
			':SALARY' => $_POST['salary'],
			':EMAIL_ID' => $_POST['email_id'],
			':ID' => $_GET['sid']
		);

		$query->execute($valToBind);
		$rowNumber = $query->rowCount();

		if($rowNumber > 0)
			echo '
				<div class="alert alert-success">
				  The student data is updated successfully!
				  </div>
			';
		else
			echo '
				<div class="alert alert-danger">
				  Sorry unable to update the student record!
				  </div>
			';

	}
  ?>
  
<?php 

# ======================== SELECT SPECIFIC STUDENT'S DATA FROM DATABASE
$query = $conn1->prepare("
	SELECT * FROM `users` WHERE `id`=:STUDENT_ID
");

$valToBind = array(
	':STUDENT_ID' => $_GET['sid']
);

$query->execute($valToBind);
$studentData = $query->fetchAll(PDO::FETCH_ASSOC);

?>
  
  <form class="form-horizontal" action="" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" >Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="full_name" value="<?php echo $studentData[0]['full_name'] ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="age" value="<?php echo $studentData[0]['age'] ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Phone No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone_no" value="<?php echo $studentData[0]['phone_no'] ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="full_address" value="<?php echo $studentData[0]['full_address'] ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Job:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="job" value="<?php echo $studentData[0]['job'] ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Salary:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="salary" value="<?php echo $studentData[0]['salary'] ?>"> 
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email_id" value="<?php echo $studentData[0]['email_id'] ?>">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="update_student">Submit</button>
        <a href="student-list.php"><button type="button" class="btn btn-default" name="update_student">Go Back</button></a>
      </div>
    </div>
  </form>
</div>

</body>
</html>
