<?php
    $team=$_GET['team'];
	include_once("dbconnect.php");
	$query = "select teamname from teams where teamname like '". $team."'";
	$result = mysqli_query($dbCon, $query)
	or die('Error querying database.');
    $row = mysqli_fetch_row($result);
	$id = $row[0];
    if($team==$row[0])
        echo "exists";
    else
        echo "not found";
	mysqli_close($dbCon);

    ?>
