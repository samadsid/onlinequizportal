<?php
session_start();
include 'includes/db.php';
if(!isset($_SESSION['enrollment']))
{
    
   header('location:http:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>QUESTIONS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script type="text/javascript">
        
</script>
<script type="text/javascript">
    
    var seconds = 900;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.radioform1.submit();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
    </script>
   

    </head>
    <body style="background-color:#C8DADE">
        <div class="container-fluid" style="background:#5BC0DE;padding:10px;color:whitesmoke;">
        <div class="container-fluid text-center">
            <div class="col-sm-11 text-center">
            <strong>QUIZ</strong><i class="fa fa-question-circle"></i>
            </div>
            <div class="col-sm-1 text-right" style="color:white;font-weight: bold; ">
                <div class="timer">
            <time id="countdown">15:00</time>
        </div>
            
            </div>
            
        </div>
        </div>
        
        <div class="row"><div class="col-sm-12" style="height:50px;"></div></div>
         <div class="thumbnail">
        <h1 id="myId" style="text-align:center; padding-bottom:5px;color:#5BC0DE ">QUESTIONS</h1>
                        </div>
       
        <div class="thumbnail"style="font-weight:bold;color:#5BC0DE ">
            
            <?php
            $category= $_SESSION['cat'];
            ?>
            

    
        <form name="radioform1" class="form-horizontal" role="form" id='login' method="post" action="results.php">
        <?php
    $res = mysqli_query($connect,"select * from english ORDER BY RAND()") ;
     $rows = mysqli_num_rows($res);
     ?>
            
            
				<?php	$i=1;
                while($result=mysqli_fetch_array($res)){?>
              <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>
                      <p class='questions' id="qname<?php echo $i;?>"> <?php ?><?php echo $result['comp'];?></p>
                      <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a1'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a1'];?>
                   <br/>
                    <input type="radio" value="<?php echo $result['a2'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a3'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a4'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value=" " id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='next<?php echo $i;?>' style="background:#5BC0DE;" class='next btn btn-primary'  type='button'>Next</button>
                    </div>     

                     <?php }elseif($i<1 || $i<$rows){?>

                       <div id='question<?php echo $i;?>' class='cont'>
                           <p class='questions' id="qname<?php echo $i;?>"> <?php ?><?php echo $result['comp'];?></p>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a1'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a1'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a2'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a3'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a4'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value="  " id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>
                    <button id='pre<?php echo $i;?>' style="background:#5BC0DE" class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' style="background:#5BC0DE" class='next btn btn-primary' type='button' >Next</button>
                    </div>

                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                        <p class='questions' id="qname<?php echo $i;?>"> <?php  ?><?php echo $result['comp'];?></p>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['question'];?></p>
                    <input type="radio" value="<?php echo $result['a1'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a1'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a2'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a2'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a3'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a3'];?>
                    <br/>
                    <input type="radio" value="<?php echo $result['a4'];?>" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/><?php echo $result['a4'];?>
                    <br/>
                    <input type="radio" checked='checked' style='display:none' value=" " id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>                                                                      
                    <br/>

                    <button id='pre<?php echo $i;?>' style="background:#5BC0DE" class='previous btn btn-primary' style="background:#5BC0DE" type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' style="background:#5BC0DE" class='next btn btn-primary' type='submit'>Finish</button>
                    </div>
         <?php } $i++;} 
         ?>
    </form>
                        </div>
            
                
                          <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="css/bootstrap.css"/>
                <script src="js/jquery.validate.min.js"></script>

		<script>
                    $(document).ready(function(){
		$('.cont').addClass('hide');
		count=$('.questions').length;
                
		 $('#question'+1).removeClass('hide');

		 $(document).on('click','.next',function(){
		     element=$(this).attr('id');
		     last = parseInt(element.substr(element.length - 1));
		     nex=last+1;
		     $('#question'+last).addClass('hide');

		     $('#question'+nex).removeClass('hide');
		 });

		 $(document).on('click','.previous',function(){
             element=$(this).attr('id');
             last = parseInt(element.substr(element.length - 1));
             pre=last-1;
             $('#question'+last).addClass('hide');

             $('#question'+pre).removeClass('hide');
         });
                    });
		</script>  
                 

            
            </body>
</html>