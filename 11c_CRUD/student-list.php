<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</head>
<body>

<?php

$conn = new PDO('mysql:host=localhost;dbname=sysdb;charset=utf8', 'root', '');

# DELETE SPECIFIC STUDENT
if(isset($_GET['sid']))
{
	
}

# SELECT ALL STUDENT
$query = $conn->prepare("SELECT * FROM `users`");
$query->execute();
$usersList = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<hr>
<?php 
if(isset($_GET['sid']))
{
	
}
?>

<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
				<th>Full Name</th>
				<th>Age</th>
				<th>Phone No</th>
				<th>Address</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php
		
		foreach($usersList AS $eachRow)
		{
			echo '
            <tr>
                <td>'.$eachRow['full_name'].'</td>
                <td>'.$eachRow['age'].'</td>
                <td>'.$eachRow['phone_no'].'</td>
                <td>'.$eachRow['full_address'].'</td>
                <td>
					<a href="student-edit.php?sid='.$eachRow['id'].'">Edit</a>
					|
					<a href="?sid='.$eachRow['id'].'">Delete</a>
				</td>
            </tr>
			';
		}
		?>
        </tbody>
        <tfoot>
            <tr>
				<th>Full Name</th>
				<th>Age</th>
				<th>Phone No</th>
				<th>Address</th>
				<th>Action</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>