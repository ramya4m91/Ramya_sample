<?php
	error_reporting(0);
	$API_ACCESS = "allow";
	include('db.php');

	$group_id = $_REQUEST['group_id'];

	$que = "SELECT gd.details_id,gd.details_name,gd.points_for_leading,gd.points_for_joining FROM group_details gd LEFT OUTER JOIN group_type gt ON gt.group_id=gd.group_type WHERE gt.group_id='".$group_id."'";

	$r = mysqli_query($conn, $que);

	if(mysqli_num_rows($r) > 0)
	{
		while($details = mysqli_fetch_assoc($r))
		{	
			$data[] = $details;
		}	
		if(empty($data))
			$data["status"] =  "fail";
	}
	else
	$data["status"] = "fail";

	//$data["status"] = "Success";
	//echo json_encode($data);

$some = 15;
function add()
{
global $some;
//echo "Some is $some";
}
add();


?>
<script>
 result = [];
for (i=0; i<=10; i++)
{
result.push(function (){ return i;});
}
alert(result[1]());
console.log(result[1]());
</script>