<?php
@session_start();
?>
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
        <link rel="stylesheet" href="css/circle.css"/>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script type="text/javascript">
        function validate()
        {
        var group = document.radioform.admin;
        for (var i=0; i<group.length; i++) {
        if (group[i].checked)
        break;
        }
        if (i==group.length)
        {
         alert("No Category is checked");
        return false;
    }
    return true;
        }
</script>
       </head>
       <body>
       
        
        
           <form action="" method="post" style="margin-top:20px;">
            <div class="form-group">
                <input type="number" class="form-control" name="no" placeholder="No of Questions you want to Insert"><br>
                <input type="submit" role="button" class="btn btn-primary" style="background:#5BC0DE;">     
                <br>
            </div>
        </form>
        
         <?php
         

        $n=filter_input(INPUT_POST, 'no');
       $_SESSION['nquestion'] =$n;
        ?>
        
        
        <form action="admin2.php" method="post" name="radioform" enctype = "multipart/form-data" >
             <?php
           for($i=1;$i<=$n;$i++){
     
		
                ?>
             <?php if($i==1){?>         
            <div id='question<?php echo $i;?>' class='cont'>
                <div class="form-group">
                    <label>CATEGORY</label>
    <input type="radio" value="1" name="admin<?php echo $i ?>">APTITUDE
    <input type="radio" value="2" name="admin<?php echo $i ?>">ENGLISH
    <input type="radio" value="3" name="admin<?php echo $i ?>">LR
</div>
               <div class="form-group">
                    <label>TYPE</label>
    <input type="radio" value="text" name="type<?php echo $i ?>">SHORT ANSWER
    <input type="radio" value="checkbox" name="type<?php echo $i ?>">CHECKBOX
    <input type="radio" value="radio" name="type<?php echo $i ?>">RADIO
</div>
                <div class="form-group">
                    <label>IMAGE</label>
                    <input type="file" name="fileToUpload<?php echo $i ?>" id="fileToUpload">
                </div>
                
                <div class="form-group">
  <label> Question <?php echo $i ?>  </label>
  <textarea class="form-control" rows="5" name="question<?php echo $i ?>"></textarea>
</div>
                <div class="form-group">
            <label>Comprehension</label>
  <textarea class="form-control" rows="7" name="comp<?php echo $i ?>" ></textarea>
</div>
            <div class="form-group">
  <label>Marks</label>
  <input type="number" class="form-control" name="mark<?php echo $i ?>" style="width:100px; ">
</div>
            <div class="form-group">
  <label >Option:1</label>
  <input type="text" class="form-control" name="o1<?php echo $i ?>" >
</div>
            <div class="form-group">
  <label >Option:2</label>
  <input type="text" class="form-control" name="o2<?php echo $i ?>">
</div>
            <div class="form-group">
  <label >Option:3</label>
  <input type="text" class="form-control" name="o3<?php echo $i ?>">
</div>
            <div class="form-group">
  <label >Option:4</label>
  <input type="text" class="form-control" name="o4<?php echo $i ?>">
            </div>
<div class="form-group">
  <label >Correct</label>
  <input type="text" class="form-control" name="correct<?php echo $i ?>">
</div>
                <div class="form-group">
  <label >Correct1</label>
  <input type="text" class="form-control" name="correct1<?php echo $i ?>">
</div>
<br>

            <button id='next<?php echo $i;?>' style="background:#5BC0DE;" class='next btn btn-primary'  type='button' onclick="return validate()">Next</button>
            <button  style="background:#5BC0DE" class='next btn btn-primary' type='submit' onclick="return validate()">Finish</button>
            </div>
                <?php }elseif($i<1 || $i<$n){?>
            <div id='question<?php echo $i;?>' class='cont'>
                <div class="form-group">
                    <label>CATEGORY</label>
    <input type="radio" value="1" name="admin<?php echo $i ?>">APTITUDE
    <input type="radio" value="2" name="admin<?php echo $i ?>">ENGLISH
    <input type="radio" value="3" name="admin<?php echo $i ?>">LR
</div>
                <div class="form-group">
                    <label>TYPE</label>
    
    <input type="radio" value="short" name="type<?php echo $i ?>">SHORT ANSWER
    <input type="radio" value="checkbox" name="type<?php echo $i ?>">CHECKBOX
     <input type="radio" value="radio" name="type<?php echo $i ?>">RADIO
</div>
                 <div class="form-group">
                    <label>IMAGE</label>
                    <input type="file" name="fileToUpload<?php echo $i ?>" id="fileToUpload">
                </div>
                
                <div class="form-group">
            <label>Question <?php echo $i ?></label>
  <textarea class="form-control" rows="5" name="question<?php echo $i ?>""></textarea>
</div>
                <div class="form-group">
            <label>Comprehension</label>
  <textarea class="form-control" rows="7" name="comp<?php echo $i ?>"></textarea>
</div>
            <div class="form-group">
  <label>Marks</label>
  <input type="number" class="form-control" name="mark<?php echo $i ?>" style="width:100px; ">
</div>
            <div class="form-group">
  <label >Option:1</label>
  <input type="text" class="form-control" name="o1<?php echo $i ?>" >
</div>
            <div class="form-group">
  <label >Option:2</label>
  <input type="text" class="form-control" name="o2<?php echo $i ?>">
</div>
            <div class="form-group">
  <label >Option:3</label>
  <input type="text" class="form-control" name="o3<?php echo $i ?>" >
</div>
            <div class="form-group">
  <label >Option:4</label>
  <input type="text" class="form-control" name="o4<?php echo $i ?>">
            </div>
<div class="form-group">
  <label >Correct</label>
  <input type="text" class="form-control" name="correct<?php echo $i ?>" >
</div>
                <div class="form-group">
  <label >Correct1</label>
  <input type="text" class="form-control" name="correct1<?php echo $i ?>">
</div>
<br>

<button id='pre<?php echo $i;?>' style="background:#5BC0DE" class='previous btn btn-primary' type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' style="background:#5BC0DE" class='next btn btn-primary' type='button' onclick="return validate()" >Next</button>
            </div>                 
                    
                    <?php }elseif($i==$n){?>
            <div id='question<?php echo $i;?>' class='cont'>
               <div class="form-group">
                   <label>CATEGORY</label>
    <input type="radio" value="1" name="admin<?php echo $i ?>">APTITUDE
    <input type="radio" value="2" name="admin<?php echo $i ?>">ENGLISH
    <input type="radio" value="3" name="admin<?php echo $i ?>">LR
</div>
                <div class="form-group">
                    <label>TYPE</label>
    
    <input type="radio" value="short" name="type<?php echo $i ?>">SHORT ANSWER
    <input type="radio" value="checkbox" name="type<?php echo $i ?>">CHECKBOX
     <input type="radio" value="radio" name="type<?php echo $i ?>">RADIO
</div>
                  <div class="form-group">
                    <label>IMAGE</label>
                    <input type="file" name="fileToUpload<?php echo $i ?>" id="fileToUpload">
                </div>
                
                <div class="form-group">
                    <label>Question <?php echo $i ?></label>
  <textarea class="form-control" rows="5" name="question<?php echo $i ?>"></textarea>
</div>
                <div class="form-group">
            <label>Comprehension</label>
            <textarea class="form-control" rows="7" name="comp<?php echo $i ?>"></textarea>
</div>
            <div class="form-group">
  <label>Marks</label>
  <input type="number" class="form-control" name="mark<?php echo $i ?>" style="width:100px; ">
</div>
            <div class="form-group">
  <label >Option:1</label>
  <input type="text" class="form-control" name="o1<?php echo $i ?>" >
</div>
            <div class="form-group">
  <label >Option:2</label>
  <input type="text" class="form-control" name="o2<?php echo $i ?>">
</div>
            <div class="form-group">
  <label >Option:3</label>
  <input type="text" class="form-control" name="o3<?php echo $i ?>">
</div>
            <div class="form-group">
  <label >Option:4</label>
  <input type="text" class="form-control" name="o4<?php echo $i ?>">
            </div>
<div class="form-group">
  <label >Correct</label>
  <input type="text" class="form-control" name="correct<?php echo $i ?>">
</div>
                <div class="form-group">
  <label >Correct1</label>
  <input type="text" class="form-control" name="correct1<?php echo $i ?>">
</div>
<br>

<button id='pre<?php echo $i;?>' style="background:#5BC0DE" class='previous btn btn-primary' style="background:#5BC0DE" type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' style="background:#5BC0DE" class='next btn btn-primary' type='submit' onclick="return validate()">Finish</button>
            </div>          
<?php }
 } ?>       
</form>
       
        
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