<?php
 	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	$conn = new mysqli("localhost", "root", "123456", "restaurant_management_system");

	$result = $conn->query("SELECT cat_id,cat_name FROM tbl_category");

	$outp = "";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	    if ($outp != "") {$outp .= ",";}
	    $outp .= '{"Name":"'  . $rs["cat_name"] . '",';
	    $outp .= '"Id":"'   . $rs["cat_id"]        . '"}'; 
	}
	$outp ='{"records":['.$outp.']}';
	$conn->close();

	echo($outp);
?>