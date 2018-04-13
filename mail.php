<?php
include 'includes/db.php';

$q="Select * from result";
$result=mysqli_query($connect,$q);
$n=mysqli_num_rows($result);
for($i=0;$i<$n;$i++){
      $r=mysqli_fetch_array($result);
       $na=$r['S_name'];
       $q1="select * from students where S_name='$na'";
       $result1=mysqli_query($connect,$q1);
       $r1=mysqli_fetch_array($result1);
       $em=$r1['S_email'];
       
$ap=$r['aptitude'];               
$en=$r['english'];
$lr=$r['lr'];
$from='mtstraders786@yahoo.com';
$subject='Your Result';
$msg="Your Aptitue Score is $ap%"
        . "Your English Score is $en%"
        . "Your LR Score is $lr%";
mail($em,$subject,$msg,$from);
     

}
?>
  