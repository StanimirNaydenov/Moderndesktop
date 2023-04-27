<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_subscriber = $conn->prepare("DELETE FROM `subscribers` WHERE id = ?");
   $delete_subscriber->execute([$delete_id]);
   header('location:subscribers.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Абонати</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="contacts">

<h1 class="heading">Абонати</h1>

<div class="box-container">

   <?php
      $select_subscribers = $conn->prepare("SELECT * FROM `subscribers`");
      $select_subscribers->execute();
      if($select_subscribers->rowCount() > 0){
         while($fetch_subscribers = $select_subscribers->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
   <p> id на потребител : <span><?= $fetch_subscribers['user_id']; ?></span></p> 
   <p> Е-mail на потребител : <span><?= $fetch_subscribers['email']; ?></span></p> 
   <a href="subscribers.php??delete=<?= $fetch_subscribers['id']; ?>" onclick="return confirm('Да изтриете този абонат?');" class="delete-btn">Изтрийте</a> 
   </div> 
   <?php
         }
      }else{
         echo '<p class="empty">Нямате абонати</p>';
      }
   ?>

</div>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>