<html>
<body>

<!-- ++++++++++ PAGINATION / AJAX SCRIPT ++++++++++ -->
<script type="text/javascript">
function pageCaller(pHandler, pController, pPointer, pInterval, pValue1)
{
	if (pController=="")
	{
		document.getElementById("paginatedTable").innerHTML="No Data Found";
		return;
	}
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari //
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5 //
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("paginatedTable").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", pHandler+"?pController="+pController+"&pPointer="+pPointer+"&pInterval="+pInterval+"&pValue1="+pValue1, true);
	xmlhttp.send();
}
</script>
<!-- ++++++++++ PAGINATION / AJAX SCRIPT ++++++++++ -->

<!-- ++++++++++ SEARCH +++++++++++ -->
<?php 
if(isset($_POST['submit']))
{
	$pValue1 = $_POST['search'];
}
?>
<form method="post" action="">
	<input type="text" name="search" />
	<button name="submit" type="submit">Search Now</button>
</form>
<!-- ++++++++++ SEARCH +++++++++++ -->

<?php 
#-- ++++++++++ PAGINATION / CONFIGURATION ++++++++++ --#
include ("db_connect.php");

if(empty($pValue1))
	{ $query = $conn1->prepare("SELECT COUNT(*) AS TOTAL FROM `users`"); $pValue1 = ""; }
else
	$query = $conn1->prepare("SELECT COUNT(*) AS TOTAL FROM `users` WHERE `full_name` LIKE '%$pValue1%'");

$query->execute();
$getTotalRow = $query->fetchAll(PDO::FETCH_ASSOC);


$pController = $getTotalRow[0]['TOTAL']; // 14
$pHandler = "paginator2.php";

$pInterval = 2;
#-- ++++++++++ PAGINATION / CONFIGURATION ++++++++++ --#
?>
	
<!-- ++++++++++ PAGINATION / PAGE CALLER ++++++++++ -->
<?php
	if($pController > 0)
	
	echo '<div id="paginatedTable"><b>Please wait... Loading...</b></div>';
	echo "<br />";
		echo "Pages: ";
	for($pPointer=0, $pageNo=1;		$pPointer < $pController ; 		$pPointer=$pPointer+$pInterval, $pageNo++)
	{
		echo " <a style='font-family:Verdana;background-color:#888888;color:#fff;border-radius:25px;' href='#' 
		onClick=\"pageCaller('$pHandler', '$pController','$pPointer', '$pInterval', '$pValue1')\">&nbsp; $pageNo &nbsp;</a> ";
	}
?>
<script type="text/javascript">
	pageCaller('<?php echo $pHandler; ?>', '<?php echo $pController; ?>', 0, '<?php echo $pInterval; ?>', '<?php echo $pValue1; ?>');
</script>
<!-- ++++++++++ PAGINATION / PAGE CALLER ++++++++++ -->

</body>
</html>