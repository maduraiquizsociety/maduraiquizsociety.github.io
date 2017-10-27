<?php
session_start();
if(isset($_SESSION['team'])){
$team=$_SESSION['team'];
include_once("dbconnect.php");
$sql="select * from teams where teamname = '$team'";
$query = mysqli_query($dbCon,$sql);
$row = mysqli_fetch_row($query);
}
else {
        header("Location: register.php");
}
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Madurai Quiz Society</title>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
     <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
     <link href="css/creative.css" rel="stylesheet">

 </head>

 <style>

 .newdes{
         background:transparent;
         border-bottom: 5px solid #ABA9A3;
         border-top:transparent;
         border-right:transparent;
         border-left:transparent;
         text-transform: uppercase;
         color:#F05F40;
         height: 100px;
         font-size: 28px;
         padding-bottom: 0px;
         padding-top: 65px;
         -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
     -moz-box-sizing: border-box;    /* Firefox, other Gecko */
     box-sizing: border-box;         /* Opera/IE 8+ */
 font-style: italic;
 outline: 0;
 }

 .radbut{
         width:150px;height:50px;
         font-size: 20px;

 }
 .form-control:focus {
   border-color: inherit;
   -webkit-box-shadow: none;
   box-shadow: none;
 }
 .btn:focus {
   outline: none;
 }





 </style>

 <body id="page-top" >
     <section id="contact" style="padding-top:40px;background-color:#fff">
         <div class="container">
                         <center>  <h2 class="section-heading" style="color:#000;text-transform:uppercase;">Confirmation</h2></center>
             <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1"  style="outline: 0;
            background-color:#c2dde6;
            overflow: hidden;
            text-align:center;
            border: 5px solid #b0aac2;
            border-radius: 20px;
            height:auto;
            padding: 10px;margin-top:20px">

                     <div class="col-lg-5 col-xs-12 col-md-5" style="color:#000;text-transform:uppercase;">
                            <center> <h4><b>Team Name</b> <hr> <?php echo $row[1];?> </h4><br>
                                    <h4><b>Team ID</b> <hr> <?php echo $row[11];?> </h4>
                                    <h5><b><i>(Provide at the Check-in table)</i></b></h5><br>
                             <h4><b>Members</b><hR></h4>
                             <h4> <?php echo $row[2].'<i>('.$row[3].')</i>';?></h4>
                             <h4><?php echo $row[4].'<i>('.$row[5].')</i>';?> </h4><br>
                             <center> <h4><b>Category</b><hr> <?php  echo $row[6]?></h4><br>

                             </center>
</div>
<div class="col-lg-2 hidden-xs col-md-2 hidden-sm">
        <div class="col-md-2 col-md-offset-5">
        <div style="margin-top:10px;
        border-right: 0px solid black;
        border-left: 0px solid black;
        height:550px;
        width:5px;
        background-color:#64706c;
        outline: 0;"></div>
</div>
</div>
        <div class="col-lg-5 col-xs-12 col-md-5" style="color:#000;text-transform:uppercase;">
                <h4><b>Phone Number</b><hr><?php  echo $row[7]?> </h4><br>
                <h4><b>Mail ID</b><hr><?php  echo $row[8]?> </h4><br>

                             <h4><b>Institution</b><hr><?php  echo $row[9]?> </h4><br>
                             <h4><b>City</b> <hr><?php echo $row[10];?> </h4><br></center>
                     </div>
</div>
                     </div>
                     <center>  <br>  <a href="return.php" class="btn btn-primary btn-xl page-scroll" style="color:#000;font-size:20px"> <i>Home</i></a>
<br></center>


             </div>
         </div>

     </section>







     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
     <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
     <script src="js/creative.min.js"></script>
 <script>
 $('.btn').button();
 </script>
 </body>

 </html>
