<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Madurai Quiz Society</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../css/creative.css" rel="stylesheet">

</head>

<style>



.logtab th,td{
	text-align:center;
}

.logtab th{
	border:2px solid black;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 15px;
	padding-top: 15px;
	font-size: 18px;

}

.logtab td{
	border:2px solid black;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 15px;
	padding-top: 15px;
	font-size: 15px;
	font-weight: 500;
        text-align:center;

}

.logtab{
	box-shadow: 1px 1px 20px 0px #9C9C9C;
	background-color: #ffffff;
}

.inner {
    border-collapse: collapse;
    width: 100%;

}

.inner th, td {
    text-align: left;
    padding: 8px;
}

.inner tr:nth-child(even){background-color: #f2f2f2}

</style>



<body id="page-top">
    <section  style="padding-top:20px;">
        <div class="container-fluid">
                        <center>  <h1 class="section-heading" style="color:#000;margin-top:50px;"> Registration List - School</h1></center><hr>
            <div class="row">

                    <div class="row">
                            <div class="col-lg-10 col-lg-offset-1" style="margin-top:10px;">

                    <table class="logtab">
                    <thead>
                    <tr>
                            <th width="5%">SNo.</th>
                            <th width="15%">Team Name</th>
                            <th width="15%">Team ID</th>
                            <th width="12%">Members</th>
                            <th width="13%">Phone No</th>
                            <th width="15%">Mail</th>
                            <th width="15%">Institute</th>
                            <th width="10%">City</th>

                    <tr>
                    </thead>
                    <tbody>
                 <?php
                 include_once("dbconnect.php");

                 $sql="select * from teams where category='SCHOOL' ";
                 $query = mysqli_query($dbCon, $sql);
                 $k=1;
                     while($row = mysqli_fetch_array($query)){

                     echo '<tr>';
                     echo "<td>$k. </td>";
                     echo "<td> $row[1] </td>";
                     echo "<td> $row[11] </td>";
                     echo "<td> " .$row[2]." (".$row[3].")<br> ".$row[4]." (".$row[5].") </td>";
                     echo "<td> $row[7] </td>";
                     echo "<td> $row[8] </td>";
                     echo "<td> $row[9] </td>";
                     echo "<td> $row[10] </td>";
                     echo '</tr>';
                     $k++;
                     }
                 ?>
                    </tbody>
                    </table>


                            </div>
                            </div>
                    </div>

        </div>

    </section>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/creative.min.js"></script>
</body>

</html>
