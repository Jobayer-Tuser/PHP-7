<?php 
/* 
Create a Form
Receive two Values "Starting Number", "Ending Number"

Show all the Even Numbers and it's Summation. 
*/

	if( isset($_POST['show_result']) )
	{
		$start = $_POST['number1'];
		$end = $_POST['number2'];
		
		$total = 0;
		for($i=$_POST['number1'] ; $i<=$end; $i+=2)
		{
			echo $i . "<br>";
			$total = $total + $i;
		}
		echo "<br>Total is $total<br><br>";
	}
?>

<form method="post" action="">
	Starting Number <input type="number" name="number1" /><br />
	Ending Number <input type="number" name="number2" /><br />
	<button name="show_result" type="submit">Enter</button>
	
</form>