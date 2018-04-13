<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
         
    </head>
    <body>
         <div class="container-fluid" style="background:#5BC0DE;padding:10px;color:whitesmoke;">
        <div class="container-fluid text-center">
            <div class="col-sm-11 text-center">
            <strong>QUIZ</strong><i class="fa fa-question-circle"></i>
            </div>
        </div>
         </div>

<?php
$email=$_POST['eid'];
$dbConnection=mysqli_connect("localhost","id1367179_mts","theunder786","id1367179_mts");

$stmt = $dbConnection->prepare('SELECT password FROM students WHERE S_email = ?');
$stmt->bind_param('s', $email);

$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
                                



  $p=$row['password'];
$from='mtstraders786@yahoo.com';
                $subject='Your Password';
                
                $msg="Your Password is $p";
                mail($email,$subject,$msg,$from);
                if(mail){
                    echo"<script>alert('Mail has been sent')</script>";
    echo"<script>window.open('index.php','_self')</script>";
                }
                else{
                    echo"<script>alert('Email does not exist,type correct email')</script>";
    echo"<script>window.open('index.php','_self')</script>";

                }
}
?>
        
       <h1>Your Email does not exist in our database,please type correct email!<a href="index.php">LOGIN</a>
</h1>        
        </body>
        
</html>