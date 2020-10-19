<html>
<head>
<style>
table, td, td
{
	border: 1px solid white; /* solid dotted */
	border-collapse: collapse;
	text-align: center;
	font-family: Verdana;
}
td
{
	background-color: gray;
	color: white;
	width: 25%;
	line-height: 200%;
}
table
{
	width: 100%;
}
</style>
</head>
<body>

<?php

/* THIS IS YOUR ARRAY USING WHICH YOU HAVE TO CREATE TABLE */
$person = array(
				0 => array(
					"id" => 3,
					"signup_date" => "2014-11-17 03:43:31",
					"type_id" => 4,
					"full_name" => "John Anjum Doe",
					"age" => 58,
					"phone_no" => 1777225335,
					"full_address" => "Park Street",
					"job" => "Engineer",
					"salary" => 50000,
					"email_id" => "john.doe@gmail.com",
					"password" => "bb@qq",
					"profile_img" => "20150424175201_4277_Austria.jpg"
				),
				1 => array(
					"id" => 4,
					"signup_date" => "2014-11-17 03:43:31",
					"type_id" => 3,
					"full_name" => "Anjum Bappa Majumder",
					"age" => 25,
					"phone_no" => 8801711567890,
					"full_address" => "Dhaka, Bangladesh.",
					"job" => "Singer",
					"salary" => "30000",
					"email_id" => "bappa@singerbd.com",
					"password" => "b@p@a",
					"profile_img" => "20150424175201_4277_Austria.jpg"
				)
		);

echo "<table>";
	echo "<thead>
			<tr>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
				<td>INDEX ER NAM</td>
			</tr>
		</thead>";
foreach($person AS $pr)
{
	echo "<tr> 
			<td>".$pr['id']."</td> 
			<td>".$pr['signup_date']."</td> 
			<td>".$pr['full_name']."</td> 
			<td>".$pr['age']."</td> 
			<td>".$pr['phone_no']."</td> 
			<td>".$pr['full_address']."</td> 
			<td>".$pr['job']."</td> 
			<td>".$pr['salary']."</td> 
			<td>".$pr['email_id']."</td> 
		</tr>";
}
echo "</table>";
?>

</body>
</html>
