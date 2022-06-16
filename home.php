<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
  header('location:index.php');
};
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body,
      html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .hero-image {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url("heroimage.jpg");
        height: 50%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        margin-bottom: 30px;
      }
     
      
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 50%;
        margin: 0 auto;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      }

      .container {
        padding: 2px 16px;
      }

     
     

      .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
      }

      .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
      }

      .hero-text button:hover {
        background-color: #555;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size: 50px">Welcome To Tutor Search</h1>
        <p>Search for the best tutors here!</p>
      </div>
    </div>
    <a target="_blank">
    <div >
      <div>
      <a href="admin_form.php">

    </div>
    </div>
    <div class="card">
      <div class="container">
        <h4><b>TUTOR</b></h4>
      </div>
      </div>
      <div >
      <div>
      <a href="login_form.php">

    </div>
    </div>

    <div class="card">
      <div class="container">
        <h5><b>STUDENT</b></h5>
      </div>
      </div>

    </div>
    <script>
        function myFunction(){
            windows.location.replace("admin_form.php")
        }
    </script>
  </body>
</html>
