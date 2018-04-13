<?php
session_start();
if(!isset($_SESSION['passw'])){
    header('location:http:../index.php');
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
    <body>
       <div class="container-fluid" style="background:#5BC0DE;padding:10px;color:whitesmoke;">
        <div class="container text-center"><strong>QUIZ</strong><i class="fa fa-question-circle"></i></div>
        </div>
        
        </div>
       <div class="container">
    <div class="row">
        <div class="col-sm-2" style="background:#BFB96F;margin-top:15px;height:65px;border:2px outset #888888 ; ">
           <h3 style="color:white;font-weight:bold;text-align:center;">Admin Area:</h3>
        </div>
        <div class="col-sm-10" style="background:#5BC0DE;margin-top:15px;height:65px;border:2px outset #888888;">
            
                <h1 style="text-align:center;margin-top:12px;color:white;">Manage Your Content:</h1>
            
        </div>
</div>
           
           <div class="row">
        <div class="col-sm-2" style="background:#5BC0DE;height:auto;border:2px outset #888888;">
            <ul style="list-style:none;text-align:center;padding:10px;font-weight:bold;font-size:20px;">
                <li style="margin:40px;margin-top:10px;"><a style="text-decoration:none;color:white;" href="index.php?insert_question">Insert New Question</a></li>
                <li style="margin:40px;margin-top:40px;"><a style="text-decoration:none;color:white;" href="index.php?view_questions">View Questions</a></li>
                <li style="margin:40px;margin-top:40px;"><a style="text-decoration:none;color:white;" href="index.php?view_english">View English Questions</a></li>
                <li style="margin:40px;margin-top:40px;"><a style="text-decoration:none;color:white;" href="index.php?view_students">View Students</a></li>
                <li style="margin:40px;margin-top:40px;"><a style="text-decoration:none;color:white;" href="index.php?view_results">View Results</a></li>
                
                <li style="margin:40px;margin-top:40px;"><a style="text-decoration:none;color:white;" href="logout.php">Admin Logout</a></li>
            </ul>
            
            </div>
               
                <div class="col-sm-10" id="content" style="background:#BFB96F;height:auto;border:2px outset #888888;">
           
           <?php
           if(isset($_GET['insert_question'])){
               include 'insert_question.php';
           }
           if(isset($_GET['view_questions'])){
               include 'view_questions.php';
           }
            if(isset($_GET['view_english'])){
               include 'view_english.php';
           }
           if(isset($_GET['view_students'])){
               include 'view_students.php';
           }
            if(isset($_GET['view_results'])){
               include 'view_results.php';
           }
          
           ?>
            
            </div>
           </div>
       </div>
               <br><br>
        
       <div class="container text-center" style="height:120px;background:#5BC0DE;text-align:center;">
    
    <p style="color:white;font-size:23px;margin-top:50px;"><span class="glyphicon glyphicon-copyright-mark"></span><b>DEVELOPED BY ABDUS SAMAD</b></p>
   
</div>

    </body>
</html>
<?php }?>