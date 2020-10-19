<html>
<body>

<?php
/* @ sign avoids showing 'Notice type of Errors' in PHP */

	echo @$_POST['name'];

?>

<form action="" method="post">

	<p>Name: <input type="text" name="name" /> </p>
	
	<p>Email: <input type="email" name="email" /> </p>
	
	<p> <button type="submit" name="save" value="something">Enter</button> </p>

</form>


</body>
</html>