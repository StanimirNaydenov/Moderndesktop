<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Табло</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="dashboard">

   <h1 class="heading">ТАБЛО</h1>

   <div class="box-container">

      <div class="box">
         <h3>Добре дошли!</h3>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="update_profile.php" class="btn">Обнови профила</a>
      </div>

      <div class="box">
         <?php
            $total_pendings = 0;
            $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_pendings->execute(['pending']);
            if($select_pendings->rowCount() > 0){
               while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
                  $total_pendings += $fetch_pendings['total_price'];
               }
            }
         ?>
         <h3><span></span><?= $total_pendings; ?><span>лв.</span></h3>
         <p>Общо чакащи</p>
         <a href="placed_orders.php" class="btn">Вижте поръчките</a>
      </div>

      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_completes->execute(['completed']);
            if($select_completes->rowCount() > 0){
               while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
                  $total_completes += $fetch_completes['total_price'];
               }
            }
         ?>
         <h3><span></span><?= $total_completes; ?><span>лв.</span></h3>
         <p>Изпълнени поръчки</p>
         <a href="placed_orders.php" class="btn">Вижте поръчките</a>
      </div>

      <div class="box">
         <?php
            $select_orders = $conn->prepare("SELECT * FROM `orders`");
            $select_orders->execute();
            $number_of_orders = $select_orders->rowCount()
         ?>
         <h3><?= $number_of_orders; ?></h3>
         <p>Направени поръчки</p>
         <a href="placed_orders.php" class="btn">Вижте поръчките</a>
      </div>

      <div class="box">
         <?php
            $select_users = $conn->prepare("SELECT * FROM `users`");
            $select_users->execute();
            $number_of_users = $select_users->rowCount()
         ?>
         <h3><?= $number_of_users; ?></h3>
         <p>Обикновени потребители</p>
         <a href="users_accounts.php" class="btn">Вижте потребителите</a>
      </div>

      <div class="box">
         <?php
            $select_admins = $conn->prepare("SELECT * FROM `admins`");
            $select_admins->execute();
            $number_of_admins = $select_admins->rowCount()
         ?>
         <h3><?= $number_of_admins; ?></h3>
         <p>Потребители като администратори</p>
         <a href="admin_accounts.php" class="btn">Вижте администраторите</a>
      </div>

      <div class="box">
         <?php
            $select_messages = $conn->prepare("SELECT * FROM `messages`");
            $select_messages->execute();
            $number_of_messages = $select_messages->rowCount() // Функцията rowCount() връща броя на редовете, засегнати от последната изпълнена заявка към базата данни;
         ?>
         <h3><?= $number_of_messages; ?></h3>
         <p>Нови съобщения</p>
         <a href="messages.php" class="btn">Вижте съобщенията</a>
      </div>
      <div class="box">
         <?php
            $select_subscribers = $conn->prepare("SELECT * FROM `subscribers`");
            $select_subscribers->execute();
            $number_of_subscribers = $select_subscribers->rowCount() // Функцията rowCount() връща броя на редовете, засегнати от последната изпълнена заявка към базата данни;
         ?>
         <h3><?= $number_of_subscribers; ?></h3>
         <p>Нови абонати</p>
         <a href="subscribers.php" class="btn">Вижте абонатите</a>
      </div>

   </div>

</section> 

<script src="../js/admin_script.js"></script>
   
</body>
</html>