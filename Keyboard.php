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
    <title>Клавиатури</title>

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

    <h1 class="heading"> <span>КЛАВИАТУРИ</span> </h1>

    <div class="box-container">
        
        <?php
                $select_products = $conn->prepare("SELECT * FROM `keyboards` LIMIT 6"); 
                $select_products->execute();
                if($select_products->rowCount() > 0){
               while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
            ?>
        
        <form action="" method="post" class="box" >
              <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
             <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
             <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
             <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
       
            <div class="image">
           
              
             <div class="icons">
              <a><button class="fas fa-heart" type="submit" name="add_to_wishlist"></button></a>
              <a href="quick_view_keyboards.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
             </div>
             <img src="images/<?= $fetch_product['image_01']; ?>" alt=""  class="main-img">
             <img src="images/<?= $fetch_product['image_02']; ?>" alt="" class="hover-img">
             <div class="name"><?= $fetch_product['name']; ?></div>
             <div class="flex">
             <div class="price"><span></span><?= $fetch_product['price']; ?><span>лв.</span></div>
               <input type="number" name="qty" class="box" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
             </div>
             <input type="submit" value="Добавете в количката" class="btn" name="add_to_cart">

            </div>
        </form>
            <?php
             }
             }   else{
             echo '<p class="empty">Няма добавени продукти още!</p>';
             }
            ?>

        
            
                    
       
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