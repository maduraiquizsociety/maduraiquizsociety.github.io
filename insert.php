<?php
$team=strtoupper($_POST['teamname']);
$m1=strtoupper($_POST['mem1']);
$m2=strtoupper($_POST['mem2']);
$a1=$_POST['age1'];
$a2=$_POST['age2'];
$category=strtoupper($_POST['options']);
$institution=strtoupper($_POST['insti']);
$city=strtoupper($_POST['city']);
$mail=$_POST['mid'];
$pho=$_POST['pho'];

if($_POST['teamname']){

if($institution == ""){
        $institution="NONE";
}
        include_once("dbconnect.php");
  	$query = "INSERT INTO teams"."(id,teamname,member1,age1,member2,age2,category,phoneno,mailid,institution,city)"."VALUES (NULL,'$team','$m1','$a1','$m2','$a2','$category','$pho','$mail','$institution','$city')";
  	$result = mysqli_query($dbCon, $query)
  	or die('Error querying database.');
        session_start();
        $_SESSION['team']=$team;
        $sql="select id from teams where teamname = '$team'";
        $query = mysqli_query($dbCon,$sql);
        $row = mysqli_fetch_row($query);
        if ($category=="SCHOOL")
                $token="Sc".$row[0];
        else if ($category=="OPEN")
                $token="Op".$row[0];
        else
                $token="La".$row[0];
        $query = "update teams set token='$token' where teamname='$team'";
  	$result = mysqli_query($dbCon, $query);
  	mysqli_close($dbCon);
        header("Location: confirm.php");
}
else {
        header("Location: register.php");
}


 ?>
