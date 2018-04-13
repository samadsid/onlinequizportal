<?php
session_start();
include 'includes/db.php';
if(!isset($_SESSION['enrollment']))
{
    
   header('location:http:index.php');
}
else{
?>

<?php
$session=$_SESSION['enrollment'];
        /* if(!$connect)
    
        echo "connection failed" ;
    
    else
    echo "connection done"; */
    $q5="insert into marks (mark) values(0)";
       mysqli_query($connect,$q5);
    $q="select S_name from students where S_enroll=$session";
    $result=mysqli_query($connect,$q);
    $n=mysqli_num_rows($result);
    for($i=1;$i<=$n;$i++)
    {
        $row=mysqli_fetch_array($result);
        
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
        <link rel="stylesheet" href="css/mystyle.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
          <script type="text/javascript">
        function validate()
{
if(document.form1.category.selectedIndex=="")
{
alert ( "Please Select A Category");
return false;
}
return true;
}
</script>
       </head>
       
    <body style="background-color:#C8DADE">
        <div class="container-fluid header">
            
        <div class="container-fluid">
            <div class="col-sm-2 text-left">
                Hello <?php echo $row['S_name'];}
                $y=$row['S_name'];
                $sql="create table `{$y}` (id int(100),question varchar(1000),answer varchar(100),answer1 varchar(100))";
                mysqli_query($connect,$sql);
                $q1="insert into result (S_name,aptitude,english,lr) values('$y',0,0,0)";
                mysqli_query($connect,$q1);
mysqli_close($connect); }?>
            </div>
            <div class="col-sm-8 text-center"><strong>QUIZ</strong><i class="fa fa-question-circle"></i></div>
        
        </div>
       
        </div>
       
    <div class="row"><div class="col-sm-12" style="height:100px;"></div></div>
    <div class="continer text-center">
        <h2 style="text-decoration:underline;text-align:center;color:#5BC0DE">Instructions</h2><br>
       
            <p>Total number of questions : 5.<p>
            <p>Time alloted : 15 minutes.<p>
            <p>Each question carry 1 mark, no negative marks.</p>
            <p>DO NOT refresh the page.</p>
            <p>All the best :-).</p>
            <form action="questions1.php" method="post" name="form1">
                <div class="form-group center-block" >
                    <select class="form-control" name="category" style="width:400px">
	    <option value="">Choose your category</option>
            <option value="1">APTITUDE</option>
            <option value="2">ENGLISH</option>
            <option value="3">LOGICAL REASONING</option>
            </select>
                <br>
                
                <input type="submit" class="btn btn-info center-block" role="button" onclick="return validate()" value="Start The Quiz...">
    </div>
            </form>
        <script type="text/javascript" src="js/bootstrap.js"></script>   
    </body>
</html>

