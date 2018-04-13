<html>
    <head></head>
    <body style="background-color:#C8DADE">
    
<?php

include 'includes/db.php';
$q="Select * from result";
$result=mysqli_query($connect,$q);
      $r=mysqli_fetch_array($result);
       $na=$_POST['sname'];
       $q1="select * from students where S_name='$na'";
       $result1=mysqli_query($connect,$q1);
       $r1=mysqli_fetch_array($result1);
       $em=$r1['S_email'];
       

$ap=$r['aptitude'];               
$en=$r['english'];
$lr=$r['lr'];

$subject = 'RESULTS';
   $msg = "<html>
<head>
<title>RESULT</title>
</head>
<body>
<p>This is your result</p>
<h1 style='color:#5BC0DE'>Your Aptitue Score is $ap%</h1>
<h1 style='color:#5BC0DE'>Your English Score is $en%</h1>
<h1 style='color:#5BC0DE'>Your LR Score is $lr%</h1>
</progress>
</body>
</html>";
$from="mtstraders786@yahoo.com";
mail($em,$subject,$msg,$from);       
if(mail){
    echo"<script>alert('Mail has been sent')</script>";
    echo"<script>window.open('index.php','_self')</script>";
}

?>
    </body>
</html>