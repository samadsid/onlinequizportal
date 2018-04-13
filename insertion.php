<?php
include 'includes/db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$enroll=$_POST['enrollment'];
$password=$_POST['homepassword'];
$date=$_POST['dat'];
$gender=$_POST['gender'];

?>




<?php
    $q="insert into students (S_name,S_email,S_enroll,password,birthdate,gender) values ('$name','$email','$enroll','$password','$date','$gender')";
    mysqli_query($connect,$q);
    mysqli_close($connect);
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
        <link rel="stylesheet" href="css/mystyle.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
       </head>
    <body style="background-color:#C8DADE">
        <div class="container-fluid header">
            
        <div class="container-fluid">
            <div class="col-sm-2 text-left">
                
            </div>
            <div class="col-sm-8 text-center"><strong>QUIZ</strong><i class="fa fa-question-circle"></i></div>
        
        </div>
       
        </div>
       
    <div class="row"><div class="col-sm-12" style="height:100px;"></div></div>
    
    <h1 style="text-align:center;color: #5BC0DE">CONGRATULATIONS YOUR DATA HAS BEEN SAVED</h1>
    <h2 style="text-align:center;color: #5BC0DE">YOU CAN NOW LOG IN</h2>
    <br>
    <br>
    <a href="index.php" class="btn btn-info center-block" role="button">LOG IN..</a>