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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script type="text/javascript">
            function validateform() {
                var p = document.forms["myform"]["name"].value;
                if(p == ""){
                    alert("Enter Your Name");
                    return false;
                }
                
                var q = document.forms["myform"]["email"].value;
                if(q == ""){
                    alert("Enter Your Email");
                    return false;
                }
                
                var x = document.forms["myform"]["email"].value;
    
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       
       alert("Invalid Email");
        return false;
    }
    
    
    
        var fld = document.forms["myform"]["enrollment"];

  if (fld.value == "") {
  alert("You didn't enter a enrollment number.");
  
  return false;
 }
  else if (isNaN(fld.value)) {
  alert("The enrollment number contains illegal characters.");
  
  return false;
 }
 else if (!(fld.value.length == 11)) {
  alert("Invalid Enrollment No");
  return false;
 }

 
  var r = document.forms["myform"]["homepassword"].value;
 if(r == ""){
     alert("Enter Your Password");
     return false;
 }
 
 
 var s = document.forms["myform"]["dat"].value;
 if(s == ""){
     alert("Enter Your Birthdate");
     return false;
 }
 
 var t = document.forms["myform"]["gender"].value;
 if(t == ""){
     alert("Mark Your Gender");
     return false;
 }
 }
            </script>
            
            
       </head>
    <body>
        <div class="container-fluid" style="background:#5BC0DE;padding: 10px;">
            <div class="col-sm-3" style="color:white;font-size:20px "><strong>HMRITM</strong></div>
            <div class="container text-right">
                <form action="lvalidation.php" name="lform" method="post">
                   <span style="color:white;">Enrollment No:</span> <input class="input-sm" type="text" name="enroll" placeholder="Enrollment NO">
                   <span style="color:white"> Password:</span> <input class="input-sm" type="password" name="password" placeholder="Password">
                   <input class="btn btn-primary" style="background:white;color: black;height:28px;padding: 3px 8px;"  type="submit" value="Login">
</form>
            </div>
            <div class="container">
                <div class="row"><div class="col-sm-11 text-right"><a href="password.php" style="padding: 16px;color: darkblue " >Forgotten Account</a></div></div>
            </div>
        </div>
        <div class="Container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <img src="Quiz_Image.jpg" class="img-responsive" width="700px"/>
                </div>
                <div class="col-sm-6" style="padding-left:100px;padding-top:25px;font-size:35px;font-weight: bold;">
                    <p>Create a new account</p>
                    <form name="myform" action="insertion.php" method="post">
                <input class="input-lg" type="text" name="name" placeholder="Your Name" style="margin-bottom:10px;border-color:#5BC0DE;"><br>
                <input class="input-lg" type="text" name="email" placeholder="Your Email" style="margin-bottom:10px;border-color:#5BC0DE;"><br>
                <input class="input-lg" type="text"  name="enrollment" placeholder="Your Enrollment No" style="margin-bottom:10px;border-color:#5BC0DE;"><br>
                <input  class="input-lg" type="password" name="homepassword" placeholder="Your Password" style="margin-bottom:10px;border-color:#5BC0DE;"><br>
                <h3 style="font-weight:bold">Birthday</h3>
                 
                
                <input type="date" name="dat" class="form-control input-lg" placeholder="Date of Birth" style="width:275px;border-color: #5BC0DE;">
                
                <input type="radio" name="gender" value="male"><span style="font-size:20px;"> Male</span>
  <input type="radio" name="gender" value="female"><span style="font-size:20px;">Female</span>
  <input type="radio" name="gender" value="other"><span style="font-size:20px;">Other</span><br>
  <input class="btn btn-primary" style="width:100px;font-weight: bold;background: :#5BC0DE " value="Sign Up" type="submit" onclick=" return validateform();">
            </form>
                </div>
            </div>
        </div>
        <br><br>
        
       <div class="container-fluid text-center" style="height:120px;background:#5BC0DE;text-align:center;">
    
    <p style="color:white;font-size:23px;margin-top:50px;"><span class="glyphicon glyphicon-copyright-mark"></span><b>DEVELOPED BY ABDUS SAMAD</b></p>
   
</div>
    </body>
</html>