<link rel="stylesheet" type="text/css" href="style.css" />
<table>

<?php
#-- ++++++++++ PAGINATION / PAGINATION ORIGINATOR ++++++++++ --#
include ("db_connect.php");

	$pController = trim($_GET['pController']); /* Counted Total Value | Limit of the Searched Data */
	$pPointer = trim($_GET['pPointer']); /* Pointer | From which Point to Show Data */
	$pInterval = trim($_GET['pInterval']); /* Interval | How Many Data to Show Per View */
	$pValue1 = trim($_GET['pValue1']); /* Interval | How Many Data to Show Per View */
?>

<?php
include ("db_connect.php");
$valToBind = array(
	':PPOINTER' => $pPointer, 
	':PINTERVAL' => $pInterval
);
// SELECT * FROM users LIMIT 0, 2
// SELECT * FROM users LIMIT 2, 2
// SELECT * FROM users LIMIT 4, 2
// SELECT * FROM users LIMIT 6, 2
$query = $conn1->prepare("SELECT * FROM `users` WHERE `type_id` = '$pValue1' LIMIT :PPOINTER, :PINTERVAL");
$query->execute($valToBind);
$getAllData = $query->fetchAll(PDO::FETCH_ASSOC);
$rowShowingNow = $query->rowCount();

foreach($getAllData AS $eachRow)
{
	echo '
	<tr>
		<td>'.$eachRow['id'].'</td>
		<td>'.$eachRow['full_name'].'</td>
		<td>'.$eachRow['phone_no'].'</td>
		<td>'.$eachRow['email_id'].'</td>
	</tr>
	';
}

#-- ++++++++++ PAGINATION / PAGINATION ORIGINATOR ++++++++++ --#
?>

</table>