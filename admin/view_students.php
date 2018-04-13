<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   
    <body>
        <h2 style="color:#5BC0DE;text-align:center;">View All Questions:</h2>
        <table width="900" align="center" style="color:white;">
           
            <tr >
                <th>SNo.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roll No</th>
                <th>Birthday</th>
                <th>Gender</th>
                
                
                
                
                
                
                <th>Delete</th>
             </tr>
             <?php
             include 'includes/db.php';
             $i=0;
             $get_pro="select * from students";
             $run_pro=mysqli_query($connect,$get_pro);
             while($row_pro=mysqli_fetch_array($run_pro)){
                 $s_id=$row_pro['S_id'];
                 $s_name=$row_pro['S_name'];
                 $s_email=$row_pro['S_email'];
                 $s_enroll=$row_pro['S_enroll'];
                  $birthdate=$row_pro['birthdate'];
                   $gender=$row_pro['gender'];
                    
                   
                    
                
                 $i++;
             
             ?>
             <tr >
                 <td><?php echo $i ?></td>
                 <td><?php echo $s_name ?></td>
                 <td><?php echo $s_email ?></td>
                 <td><?php echo $s_enroll ?></td>
                 <td><?php echo $birthdate ?></td>
                 <td><?php echo $gender ?></td>
                 
                 
                 
                 
                 <td><a href="delete_student.php?delete_student=<?php echo $s_id ?>">Delete</a></td>
                 
             <?php } ?>
                 
                 
             </tr>
            
        </table>
        
        
        
        
    </body>
</html>
