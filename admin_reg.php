<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $subject=$_POST['subject'];
   $location=$_POST['location'];



   $select = " SELECT * FROM admin_form WHERE email = '$email' && password = '$cpass' ";

   $result = mysqli_query($conn, $select);
   $insert = "INSERT INTO admin_form(name, email, password,subject,location) VALUES('$name','$email','$cpass','$subject','$location')";

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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="text" name="subject" required placeholder="Enter your subject">
      <input type="text" name="location" required placeholder="Enter your location">
    
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="admin_form.php">login now</a></p>
   </form>

</div>

</body>
</html>