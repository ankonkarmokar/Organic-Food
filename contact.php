<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `message`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="contact">

   <h1 class="title">Terms & Conditions</h1>
<h1 style="font-size: large;">A user may return any product during the time of delivery, or within 7 days if: <br><br></h1>
   <p style="font-size: large;">

a)        Product does not meet the user’s expectations. <br><br>

b)        Found damaged during delivery. <br><br>

c)        Have doubt about the product quality and quantity.<br><br>

d)        Received in an unhealthy/ unexpected condition. <br><br>

e)        Is not satisfied with the packaging.<br><br>

f)         Finds product unusable.<br><br> 
           
For perishable products such as milk, fruits, and fresh vegetables, we have a one (1) day return policy.<br><br>

We are continuously monitoring accounts of customers with excessive requests for returns and refunds. We take the necessary steps to prevent this.
   </p></section>








<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>