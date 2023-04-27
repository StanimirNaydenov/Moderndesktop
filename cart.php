<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
};

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header('location:cart.php');
}

if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
   $update_qty->execute([$qty, $cart_id]);
   $message[] = 'Количеството в количката е обновено';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Количка</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<?php include 'components/user_header.php'; ?>

<!-- side-bar section ends -->

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">ВАШИТЕ <span>ПРОДУКТИ</span></h1>
 

    <div class="box-container" >
    
      <?php
      $grand_total = 0;
      $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?" );
      $select_cart->execute([$user_id]);
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
     ?>
      <form action="" method="post" class="box">
      <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
      <img src="images/<?= $fetch_cart['image']; ?>" alt="">
      <div class="name"><?= $fetch_cart['name']; ?></div>
      <div class="flex">
         <div class="price"><?= $fetch_cart['price']; ?>лв.</div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="<?= $fetch_cart['quantity']; ?>">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
      </div>
   <div class="sub-total"> междинна сума : <span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>лв.</span> </div>
   <input type="submit" value="Изтрите продукт" onclick="return confirm('Да изтриете това от количката?');" class="btn" name="delete">
   </form>
   <?php 
   $grand_total += $sub_total;
      }
   }else{
      echo '<p class="empty">Твоята количка е празна! </p>';
   }
   ?>
   </div>

   

   <div class="cart-total">
      <p>Крайна цена : <span><?= $grand_total; ?>лв.</span></p>
      <a href="products.php?variableName='ValueOfVariable" class="btn">Продължи с пазаруването</a>
      <a href="cart.php?delete_all" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('Да изтриете всичко от списъка с желания?');">Изтри всички продукти</a>
      <a href="checkout.php?variableName='ValueOfVariable" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Завършване на поръчката</a> 


    </div>

</section>

<!-- shopping cart section ends -->
















<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>