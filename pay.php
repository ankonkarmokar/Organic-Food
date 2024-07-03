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
   <title>Online Payment</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="form-container">

   <form action="" method="POST">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1NgvV6SHdiU0Obz69yVDBxeE"
  publishable-key="pk_test_51NgvS1SHdiU0Obz6wFv3rkEtpH8hTIKLqqsj8du9YCJI0tTjBmfJNcMOeiJXs4eFkK95byPXhHCwPqzbh6znBBmJ00nwKgZ5Lo"
>
</stripe-buy-button>
   </form>
</section>
<script src="js/script.js"></script>

</body>
</html>