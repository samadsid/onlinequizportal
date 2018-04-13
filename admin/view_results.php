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
                <th>Aptitude</th>
                <th>English</th>
                <th>Logical Reasoning</th>
               
                
                
                
                
                
                
                
             </tr>
             <?php
             include 'includes/db.php';
             $i=0;
             $get_pro="select * from result";
             $run_pro=mysqli_query($connect,$get_pro);
             while($row_pro=mysqli_fetch_array($run_pro)){
                 $s_id=$row_pro['S_id'];
                 $s_name=$row_pro['S_name'];
                 $apti=$row_pro['aptitude'];
                 $english=$row_pro['english'];
                  $lr=$row_pro['lr'];
                  
                    
                   
                    
                
                 $i++;
             
             ?>
             <tr >
                 <td><?php echo $i ?></td>
                 <td><?php echo $s_name ?></td>
                 <td><?php echo $apti ?></td>
                 <td><?php echo $english ?></td>
                 <td><?php echo $lr ?></td>
               
             <?php } ?>
                 
                 
             </tr>
            
        </table>
        
        
        
        
    </body>
</html>
