<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моите поръчки</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php include 'components/user_header.php'; ?>
   <section class="orders">

<h1 class="heading">Моите <span>поръчки</span></h1>

<div class="box-container">

   <?php
      $select_orders = $conn->prepare("SELECT * FROM `myorders`  WHERE user_id = ?");
      $select_orders->execute([$user_id]);
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> Направена на:  <span><?= $fetch_orders['placed_on']; ?></span> </p> 
      <p> Име: <span><?= $fetch_orders['name']; ?></span> </p> 
      <p> Номер: <span><?= $fetch_orders['number']; ?></span> </p> 
      <p> Всички продукти: <span><?= $fetch_orders['total_products']; ?></span> </p> 
      <p> Крайна цена: <span>BGN<?= $fetch_orders['total_price']; ?>/-</span> </p>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">Все още нямате направени поръчки!</p>';
      }
   ?>

</div>

</section>

</section>

    






   <?php include 'components/footer.php'; ?>
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

     <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>
</html>