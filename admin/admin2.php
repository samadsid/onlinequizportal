<?php
session_start();

include 'includes/db.php';
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
    <body>
       <div class="container-fluid" style="background:#5BC0DE;padding:10px;color:whitesmoke;">
        <div class="container text-center"><strong>QUIZ</strong><i class="fa fa-question-circle"></i></div>
        </div>
        
        <h1 style="text-align:center;font-weight:bold">ADMIN PAGE</h1>
    </body>
</html>



        <?php
               
   
    $n = $_SESSION['nquestion'];
     for($i=1;$i<=$n;$i++){
        if (!empty($_FILES["fileToUpload$i"]["name"])) {
     $file_name=$_FILES["fileToUpload$i"]["name"];
     $temp_name=$_FILES["fileToUpload$i"]["tmp_name"];
    $imgtype=$_FILES["fileToUpload$i"]["type"];
  //  $ext= GetImageExtension($imgtype);
    $targetpath = "uploads/".$file_name;

    
}
else{
    $targetpath="";
}

         
         
        $question=filter_input(INPUT_POST, "question$i");
         $comp=filter_input(INPUT_POST, "comp$i");
               $mark=filter_input(INPUT_POST, "mark$i");
              $a1=filter_input(INPUT_POST, "o1$i");
               $a2=filter_input(INPUT_POST, "o2$i");
               $a3=filter_input(INPUT_POST, "o3$i");
               $a4=filter_input(INPUT_POST, "o4$i");
               $co=filter_input(INPUT_POST, "correct$i");
               $co1=filter_input(INPUT_POST,"correct1$i");
               $ty=filter_input(INPUT_POST, "admin$i");
             $type=filter_input(INPUT_POST,"type$i");
            
              
              
             if($ty==2){
                 $q="insert into english (comp,question,marks,a1,a2,a3,a4,correct) values ('$comp','$question',$mark,'$a1','$a2','$a3','$a4','$co')";
            $eng=  mysqli_query($connect,$q);
                 if($eng){
                     echo "<script>alert('Question$i has been inserted')</script>";
                 }
             }
             else{
        $q="insert into questions (question,marks,a1,a2,a3,a4,correct,correct1,catid,type,images) VALUES ('$question',$mark,'$a1','$a2','$a3','$a4','$co','$co1',$ty,'$type','$targetpath')";
    $result=mysqli_query($connect,$q);
         if($result){
              echo "<script>alert('Question$i has been inserted')</script>";
              
         }
     }}
     echo "<script>window.open('index.php?view_questions','_self')</script>";
     
    
          ?>