<?php

//poll.php

include('database_connection.php');

if(isset($_POST["poll_option"]))
{
	$query = "
	INSERT INTO vote 
	(poll_framework) VALUES (:poll_framework)
	";
	$data = array(
		':poll_framework'		=>	$_POST["poll_option"]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>