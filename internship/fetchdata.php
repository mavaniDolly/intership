<?php
	$con=mysqli_connect("localhost","root","","internship");
	$q=mysqli_query($con,"select * from tbl_student")or die("error".mysqli_error($con));
	
		$row=mysqli_fetch_row($q);
		
		print_r($row);
		
		//debug
		echo "</br>".$row[0],$row[2],$row[3];
		
		//numerical associative array format
		$row=mysqli_fetch_array($q);
		echo "<pre>";
		print_r($row);
		echo "</br>".$row[0],$row[2],$row[3];
		echo "</br>".$row['Student_id'],$row['Student_name'],$row['student_gender'],$row['student_mobno'];
?>