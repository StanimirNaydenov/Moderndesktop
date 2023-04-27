<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/wishlist_cart.php';

if(isset($_POST['delete'])){
    $wishlist_id = $_POST['wishlist_id'];
    $delete_wishlist_item = $conn->prepare("DELETE FROM `wishlist` WHERE id = ?");
    $delete_wishlist_item->execute([$wishlist_id]);
 }
 
 if(isset($_GET['delete_all'])){
    $delete_wishlist_item = $conn->prepare("DELETE FROM `wishlist` WHERE user_id = ?");
    $delete_wishlist_item->execute([$user_id]);
    header('location:wishlist.php');
 }
 
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Списък с желания</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<?php include 'components/user_header.php'; ?>

<!-- products section starts  -->
<section class="products">

   <h3 class="heading">ВАШИЯ СПИСЪК С ЖЕЛАНИЯ</h3>

   <div class="box-container">
         <?php
            $grand_total = 0;
            $select_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $select_wishlist->execute([$user_id]);
            if($select_wishlist->rowCount() > 0){
               while($fetch_wishlist = $select_wishlist->fetch(PDO::FETCH_ASSOC)){
                    $grand_total += $fetch_wishlist['price'];  
               
         ?>
        
        <form action="" method="post" class="box">
          <input type="hidden" name="pid" value="<?= $fetch_wishlist['pid']; ?>">
          <input type="hidden" name="wishlist_id" value="<?= $fetch_wishlist['id']; ?>">
          <input type="hidden" name="name" value="<?= $fetch_wishlist['name']; ?>">
          <input type="hidden" name="price" value="<?= $fetch_wishlist['price']; ?>">
          <input type="hidden" name="image" value="<?= $fetch_wishlist['image']; ?>">
       
            <div class="image">
           
              
             <div class="icons">
             </div>
             <img src="images/<?= $fetch_wishlist['image']; ?>" alt="">
             <div class="name"><?= $fetch_wishlist['name']; ?></div>
             <div class="flex">
             <div class="price"><?= $fetch_wishlist['price']; ?>лв.</div>
             <input type="number" name="qty" class="box" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
             </div>
             <input type="submit" value="Добавете в кошницата" class="btn" name="add_to_cart"> 
             <input type="submit" value="Изтрите подукта" onclick="return confirm('Да изтриете това от списъка с желания?');" class="btn" name="delete"> 

            </div>
        </form>
            <?php 
             }
             }   else{
             echo '<p class="empty">Няма добавени стоки още!</p>';
             }
            ?>
   
      
   </div>

   <div class="wishlist-total">
      <p>Крайна цена : <span><?= $grand_total; ?>лв.</span></p>
      <a href="home.php?variableName='ValueOfVariable" class="btn">Продължете с пазаруването</a>
      <a href="wishlist.php?delete_all" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>" onclick="return confirm('Да изтриете всичко от списъка с желания?');">Изтрийте всички продукти</a>
   </div>

</section>


<!-- products section ends -->

<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>