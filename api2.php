<?php
	error_reporting();
	$API_ACCESS = "allow";
	include('db.php');

	$que = "SELECT * FROM student_details WHERE course = 11 ORDER BY sno ASC";
	$exc = mysqli_query($conn,$que);
	$details[] = "Success";

	if(mysqli_num_rows($exc) > 0)
	{
		while($data = mysqli_fetch_assoc($exc))
		{
			$temp['Student Number'] = $data['sno'];
			$temp['Student First Name'] = $data['student_first_name'];
			$temp['Student Last Name'] = $data['student_last_name'];
			$details[] = $temp;
		}		
	}
	echo json_encode($details);
?>