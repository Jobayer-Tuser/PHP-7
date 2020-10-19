<?php

# Both are Same
# if( isset($_POST['email']) )
# if( filter_has_var(INPUT_POST, 'email') )

if( !filter_has_var(INPUT_POST, "email") ) // INPUT_POST // isset($_GET['email'])
{
	echo("Input type does not exist");
}
else
{
	if ( filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) == true ) 
	{
		echo "E-Mail is valid";
	} 
	else 
	{
		echo "E-Mail is not valid";
	}
}
?>
<form method="post" action="">
<input type="text" name="email" />
<input type="submit" value="Click Here" />
</form>
