<?php

session_start();
 $eno=$_POST['enroll'];
  $pass=$_POST['password'];
if($eno=="admin" && $pass=="admin"){
    $_SESSION['passw'] = $pass;
    header('location:http:admin/index.php');
}
else{
?>


<?php
   
include 'includes/db.php';
    
    $q="select * from students where S_enroll='$eno' && password='$pass'";
    $result=mysqli_query($connect,$q);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
        $_SESSION['enrollment']=$eno;
        header('location:http:cat.php');
    }
    else
    {
        header('location:http:index.php');
    }
}
    mysqli_close($connect);
    ?>