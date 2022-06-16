
<?php
 

 $user = 'root';
 $password = '';
  
 
 $database = 'tutorfinder';
  
 
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
  
 
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 $sql = " SELECT name,tutor,subject,location FROM student_details";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
  
 <head>
     <meta charset="UTF-8">
     <title>Student Request</title>
     <h1>Student Request</h1>
   
     <style>
         table {
             margin: 0 auto;
             font-size: large;
             border: 1px solid black;
         }
  
         h1 {
             text-align: center;
             color:black;
             font-size: xx-large;
             font-family: 'Gill Sans', 'Gill Sans MT',
             ' Calibri', 'Trebuchet MS', 'sans-serif';
         }
  
         td {
            
             border: 1px solid black;
         }
  
         th,
         td {
             font-weight: bold;
             border: 1px solid black;
             padding: 10px;
             text-align: center;
         }
  
         td {
             font-weight: lighter;
         }
         
             
         .text-center {
   text-align: center;
 }
         
     </style>
 </head>
  
 <body style = "background-color:white">
 
     <section>
         
       
         <table>
             <tr>
                 <th>ID</th>
                 <th>USERNAME</th>
                 <th>NAME</th>
               
             </tr>
            
             <?php
              
                 while($rows=$result->fetch_assoc())
                 {
             ?>
             <tr>
                
                 <td><?php echo $rows['name'];?></td>
                 <td><?php echo $rows['tutor'];?></td>
                 <td><?php echo $rows['subject'];?></td>
                 <td><?php echo $rows['location'];?></td>
                 
             </tr>
             <?php
                 }
             ?>
         </table>
         <div class="text-center">
        <a href="home.php"> 
   <button onclick="myButton()">Send Feedback</button>
   <script>
    function myButton(){
        alert("FeedBack Submitted");
    }
 
 </div>
 
     </section>
 
 </body>
  
 </html>