<?php 
include 'includes/db.php';
if(isset($_GET['delete_english'])){
    $q_id=$_GET['delete_english'];
    $q="delete from english where id='$q_id'";
   $result= mysqli_query($connect,$q);
   if($result){
       echo "<script>alert('One question has been deleted')</script>";
     echo "<script>window.open('index.php?view_english','_self')</script>";
 
   }
}
?>
