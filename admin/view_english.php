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
        <div class="table-responsive">
            <table class="table" width="900" align="center" style="color:white;">
           
            <tr >
                <th>SNo.</th>
                <th>Comprehension</th>
                <th>Question</th>
                <th>Marks</th>
                <th>Options1</th>
                <th>Option2</th>
                <th>Option3</th>
                <th>Option4</th>
                <th>Correct</th>
                
                
                
                
                
                <th>Delete</th>
             </tr>
             <?php
             include 'includes/db.php';
             $i=0;
             $get_pro="select * from english";
             $run_pro=mysqli_query($connect,$get_pro);
             while($row_pro=mysqli_fetch_array($run_pro)){
                 $q_id=$row_pro['id'];
                 $question=$row_pro['question'];
                 $marks=$row_pro['marks'];
                 $a1=$row_pro['a1'];
                  $a2=$row_pro['a2'];
                   $a3=$row_pro['a3'];
                    $a4=$row_pro['a4'];
                    $correct=$row_pro['correct'];
                   
                    $comprehension=$row_pro['comp'];
                    
                
                 $i++;
             
             ?>
             <tr >
                 <td><?php echo $i ?></td>
                 <td><?php echo $comprehension ?></td>
                 <td><?php echo $question ?></td>
                 <td><?php echo $marks ?></td>
                 <td><?php echo $a1 ?></td>
                 <td><?php echo $a2 ?></td>
                 <td><?php echo $a3 ?></td>
                 <td><?php echo $a4 ?></td>
                 <td><?php echo $correct ?></td>
                 
                 
                 
                 
                 
                 <td><a href="delete_english.php?delete_english=<?php echo $q_id ?>">Delete</a></td>
                 
             <?php } ?>
                 
                 
             </tr>
            
        </table>
        
        
        </div>
        
    </body>
</html>
