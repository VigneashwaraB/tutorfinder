<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $tutor = $_POST['tutor'];
   $subject = $_POST['subject'];
   $location = $_POST['location'];
  


   $select= " SELECT * FROM admin_reg WHERE name = '$tutor' && subject = '$subject' ";
 
   $result = mysqli_query($conn, $select);
   
   $insert = "INSERT INTO student_details(name,tutor, subject,location) VALUES('$name','$tutor','$subject','$location')";

   if(mysqli_query($conn,$insert)){
      echo "Successfull";
   }
   else{
      echo "Error: ". $sql . "".mysqli_error($conn);
   }
   mysqli_close($conn);
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Details</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Student details</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="text" name="tutor" required placeholder="enter tutor name">
      <input type="text" name="subject" required placeholder="enter tutor subject">
      <input type="text" name="location" required placeholder="enter tutor location">
      
    
      <input type="submit" name="submit" value="Send Feedback" class="form-btn">
       <a href="home.php">logout</a></p>
   </form>

</div>

</body>
</html>