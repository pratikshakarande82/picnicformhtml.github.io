<?php
$insert = false;
if(isset($_POST['name'])){

$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password);
if(! $con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "successful";

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];

$desc = $_POST['desc'];

$sql = "INSERT INTO `picnic`.`picnic` ( `name`, `rollno`, `gender`, `email`, `phone1`,  `desc`, `date`) VALUES ( '$name', '$rollno', '$gender', '$email', '$phone1',  '$desc', current_timestamp());";

//echo $sql;
if($con->query($sql)==true)
{
   // echo "successfully inserted";
   $insert =true;
}
else{
    echo "error: $sql <br> $con->error";
}

$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="img" src="bg.jpg" alt="loading">
    
    <div class="container">
        <img class="logo" src="logo.jpg" alt="loading">
        
        <H2> Genba Sopanrao Moze College Of Engineering , Balewadi ,Pune</H2>
        <br>
        <br>
        <h3>WELCOME TO COMPUTER SCIENCE DEPARTMENT.</h3>
        
        <form action="index.php" method="post" >
         <input type="text" name="name" id="name" placeholder="Enter Your Name">
         <input type="text" name="rollno" id="rollno" placeholder="Enter Your roll number">
         <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
         <input type="email" name="email" id="email" placeholder="Enter Your email">
         <input type="phone1" name="phone1" id="phone1" placeholder="Enter Your mobile number">
         
         <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter other information"></textarea>
         
         <button class="btn">Submit</button>
         <?php
        if($insert == true){
         echo " <p>
             your successfully inserted , we are gappy to see you in picnic!!
        </p>";
        }
        ?>
       

         

        </form>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `trip` (`Name`, `Roll_no`, `Gender`, `email`, `student_mobile_no`, `parent_mobile_no`, `Date`, `other _information`) VALUES ('pratiksha abasaheb karande', '1', 'female', 'pratikshakarande82@gmail.com', '7219686404', '9822316604', '2022-04-11', 'thanks');-->
</body>
</html>

