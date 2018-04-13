<?php

$con=mysqli_connect("localhost","root","","quiz");
$q="Select * from code";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
for($i=0;$i<$n;$i++){
      $r=mysqli_fetch_array($result);
       $na=$r['Code'];
       $em=$r['S_email'];
      echo $na;
       
       require_once ("Mail/class.phpmailer.php");
 require_once("Mail/PHPMailerAutoload.php"); 
require_once("Mail/class.smtp.php"); 

$mail = new PHPMailer;
$mail->isSMTP();                                    
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Username = 'sid.sam02@gmail.com';                
$mail->Password = 'theunder';                           
$mail->SMTPSecure = 'tsl';                            
$mail->Port = 587;                                    

$mail->setFrom('sid.sam02@gmail.com', 'Samad');
$mail->addAddress("$em");     
$mail->headers = "MIME-Version: 1.0" . "\r\n";
$mail->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$name=$r['S_name'];
$mail->Subject = 'RESULTS';
$mail->Body    = "<html>
<head>
<title>RESULT</title>
</head>
<body>
<p>This is your result</p>
<h1 style='color:#5BC0DE'>$name this is your code $na</h1>

</body>
</html>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
       

}
?>
  