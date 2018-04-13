<?php
session_start();
include 'includes/db.php';
if(!isset($_SESSION['enrollment']))
{
    
   header('location:http:index.php');
}
else{
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Quiz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/circle.css"/>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
       </head>
    <body style="background-color:#C8DADE">
       <div class="container-fluid" style="background:#5BC0DE;padding:10px;color:whitesmoke;">
        <div class="container-fluid text-center">
            <div class="col-sm-11 text-center">
            <strong>QUIZ</strong><i class="fa fa-question-circle"></i>
            </div>
            <div class="col-sm-1 text-right" style="color:white;font-weight: bold; ">
                <a href="logout.php"> <input class="btn btn-primary" type="button" name="logout" style="background:#BFB96F;" value="LOGOUT">   </a>
            
            </div>
            
        </div>
       </div>
<div class="row"><div class="col-sm-12" style="height:250px;"></div></div>
        
        
        <h1 style="text-align:center;color:#5BC0DE;">Your Section Has Been Submitted...<br>Kindly Go For Another Section...</h1>
        <a style="text-align:center;color:#5BC0DE;" href="cat.php"><h4>Go for Another Section</h4></a>
        <br>
        <br>
        <h4 style="text-align:center;color:#5BC0DE;">NOTE:E-MAIL YOUR RESULT AFTER COMPLETION OF ALL THE SECTIONS..</h4>
        <br>
        <br>
         <div class="container text-center" style="color:#5BC0DE;font-size:20px;">
<?php
$category= $_SESSION['cat'];
            ?>

   
<?php
$session=$_SESSION['enrollment'];
   
    
    $q="select S_name from students where S_enroll=$session";
    $result=mysqli_query($connect,$q);
    $n=mysqli_num_rows($result);
    for($i=1;$i<=$n;$i++)
    {
        $row=mysqli_fetch_array($result);
        
    }
                $y=$row['S_name'];
                
   if($category==2){
       $q="select * from english";
    $result=mysqli_query($connect,$q);
    $n=mysqli_num_rows($result);
   
   for($i=1;$i<=$n;$i++){
       $row=mysqli_fetch_array($result);
       $r=$row['id'];
       
       $a=$_POST[$r];
      $q3="select * from english where id={$r}";
      $result3=mysqli_query($connect,$q3);
      $row3=mysqli_fetch_array($result3);
      $que=$row3['question'];
       $c=$row3['correct'];
       $q2="select marks from english where id={$r}";
       $result2=mysqli_query($connect,$q2);
       $row2=mysqli_fetch_array($result2);
       $m=$row2['marks'];
       
       if($a==$c){
        
      $q4="update marks set mark=mark+$m";
      
      mysqli_query($connect,$q4);
       }
       
    $q1="INSERT INTO `{$y}`(id,`question`,`answer`) VALUES ($r,'$que','$a')";
    mysqli_query($connect,$q1);
   }
   $q5="select * from marks";
   $result5=mysqli_query($connect,$q5);
   $row5=mysqli_fetch_array($result5);
   $s=$row5['Mark'];
   $q6="select sum(marks) as value_sum from english";
    $result6=mysqli_query($connect,$q6);
   $row6=mysqli_fetch_array($result6);
   $t=$row6['value_sum'];
   
   $pe=($s/$t)*100; 
       $qe="update result set english=$pe where S_name='$y'";
       mysqli_query($connect,$qe);
       
   }
   else{
  
    $q="select * from questions where catid=$category";
    $result=mysqli_query($connect,$q);
    $n=mysqli_num_rows($result);
   
   
   for($i=1;$i<=$n;$i++){
       $row=mysqli_fetch_array($result);
       if($row['type']=="checkbox"){
           $r=$row['id'];
           if(isset($_POST[$r])){
           $checkBox = $_POST[$r];}
if(isset($_POST['submit']))
{
   if(isset($checkBox[0])){
   $check1=$checkBox[0];}
   else{
       $check1='';
   }
   if(isset($checkBox[1])){
   $check2=$checkBox[1];}
   else{
       $check2='';
   }

              $q3="select * from questions where id={$r}";
      $result3=mysqli_query($connect,$q3);
      $row3=mysqli_fetch_array($result3);
      $que=$row3['question'];
       $c=$row3['correct'];
       $c1=$row3['correct1'];
       $q2="select marks from questions where id={$r}";
       $result2=mysqli_query($connect,$q2);
       $row2=mysqli_fetch_array($result2);
       $m=$row2['marks'];
       
       if($check1==$c && $check2==$c1){
        
      $q4="update marks set mark=mark+$m";
      
      mysqli_query($connect,$q4);
       }
 
   $q1="INSERT INTO `{$y}`(id,`question`,`answer`,`answer1`) VALUES ($r,'$que','$check1','$check2')";
    mysqli_query($connect,$q1);
  

}

       }
       else{
       $r=$row['id'];
       $a=$_POST[$r];
       

       $q3="select * from questions where id={$r}";
      $result3=mysqli_query($connect,$q3);
      $row3=mysqli_fetch_array($result3);
      $que=$row3['question'];
       $c=$row3['correct'];
        $q2="select marks from questions where id={$r}";
       $result2=mysqli_query($connect,$q2);
       $row2=mysqli_fetch_array($result2);
       $m=$row2['marks'];
       
       if($a==$c){
        
      $q4="update marks set mark=mark+$m";
      
      mysqli_query($connect,$q4);
       }
 
    $q1="INSERT INTO `{$y}`(id,`question`,`answer`) VALUES ($r,'$que','$a')";
    mysqli_query($connect,$q1);
   }
   }
   $q5="select * from marks";
   $result5=mysqli_query($connect,$q5);
   $row5=mysqli_fetch_array($result5);
   $s=$row5['Mark'];
   if($category==1){
   $q6="select sum(marks) as value_sum from questions where catid=$category";
    $result6=mysqli_query($connect,$q6);
   $row6=mysqli_fetch_array($result6);
   $t=$row6['value_sum'];
   
   $pi=($s/$t)*100; 
   $qi="update result set aptitude=$pi where S_name='$y'";
       mysqli_query($connect,$qi);
       
   }
   else{
       $q6="select sum(marks) as value_sum from questions where catid=$category";
    $result6=mysqli_query($connect,$q6);
   $row6=mysqli_fetch_array($result6);
   $t=$row6['value_sum'];

   $pl=($s/$t)*100; 
   $ql="update result set lr=$pl where S_name='$y'";
       mysqli_query($connect,$ql);
       
   }
   }
       ?>

             <?php
             $q7="delete from marks";
             mysqli_query($connect,$q7);
mysqli_close($connect);}
             ?>
  
            
             <form method="post" action="sendmail.php">
    <input type="hidden" name="sname" value="<?php echo $y?>">
    <input type="submit" class="btn btn-info center block" value="MAIL..">
</form>
             
             
             

        </div>
    </body>
</html>