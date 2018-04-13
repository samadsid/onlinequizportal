<?php 
include 'includes/db.php';
if(isset($_GET['delete_student'])){
    $q_id=$_GET['delete_student'];
    $q="delete from students where S_id='$q_id'";
   $result= mysqli_query($connect,$q);
   if($result){
       echo "<script>alert('One student has been deleted')</script>";
     echo "<script>window.open('index.php?view_students','_self')</script>";
 
   }
}
?>
