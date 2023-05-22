<?php 
require_once('admin_dbcon.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Student Fetch</title>
</head>
<body>
	<table border="1" cellspacing="0">
		<thead>
			<tr>
				<td>Id</td>
				<td>Student Name</td>
				<td>Father Name</td>
				<td>Mother Name</td>
				<td>Course</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php
			$query=mysqli_query($dbcon,"SELECT * FROM `student_data`");
			
			while($rows=mysqli_fetch_assoc($query)){?>
				
				<tr>
					<td><?=$rows['id']?></td>
					<td><?=$rows['student_name']?></td>
					<td><?=$rows['father_name']?></td>
					<td><?=$rows['mother_name']?></td>
					<td><?=$rows['course']?></td>
					<td><a href="delete.php?id=<?=$rows['id']?>">Delete</a></td>
				</tr>
				
			<?php	
			}
			
			
			?>
			
		</tbody>
	</table>
</body>
</html>