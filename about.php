<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">
   <img src="images/IMG-20230127-WA00023.jpg" style="height: 350px; width:310px;">
      <div class="box">
        
         <h3>Ankon Karmokar</h3>
         <p style="font-size: large;">ID:- B190305039. <br>Studying at Department of Computer Sceience & Engineering <br>Jagannath University.</p>
      </div>
</row>
<div class="row">
      <img src="images/nibir (2).jpg" style="height: 350px; width:310px;">
      <div class="box" style="margin-left: 160px;">
         
         <h3>Nibir Joydhar</h3>
         <p style="font-size: large;" >ID:- B190305036. <br>Studying at Department of Computer Sceience & Engineering <br>Jagannath University.</p>
      
      </div>

   </div>

</section>











<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>