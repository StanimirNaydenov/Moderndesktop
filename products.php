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
    <title>Продукти</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<?php include 'components/user_header.php'; ?>

<!-- category section starts  -->

<section class="category">

    <h1 class="heading"> ПАЗАРУВАЙ ПО <span>КАТЕГОРИИ</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <a href="Boxes.php?variableName='ValueOfVariable">
                    <img src="images/asus boxes.png" class="main-img" alt="">
                    <img src="images/razer_tomahawk_atx.png" class="hover-img" alt="">
                    <h3>Кутии</h3>
                </a>
                
            </div>

        </div>
        <div class = "box"> 
        <a href="Motherboards.php?variableName='ValueOfVariable" >
            <div class="image">
                <img src="images/motherboard asus.jpg"  class="main-img" alt="">
                <img src="images/motherboard auros.png" class="hover-img" alt="">
                <h3>Дънни платки</h3>
            </div>
            
        </a>

        </div>
        

        <a href="Video Cards.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/rtx 4090.jpg"  class="main-img" alt="">
                <img src="images/7000.jpg" class="hover-img" alt="">
                <h3>Видео карти</h3>
            </div>
        </a>

        <a href="HeadPhones.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/razer-kraken-7-1-v2-digital-gaming-headset-drivers-50-mm-wit.jpg"  class="main-img" alt="">
                <img src="images/logitech headphone.jpg" class="hover-img" alt="">
                <h3>Слушалки</h3>
            </div>          
        </a> 

        <a href="Mouse.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/basilisk.jpg"  class="main-img" alt="">
                <img src="images/Logitech-G-PRO-Wireless-Gaming-Mouse-910-005272-1-1000x1000.jpg" class="hover-img" alt="">
                <h3>Мишки</h3>
            </div>
        </a>

        <a href="Keyboard.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/BlackWidow1.jpg"  class="main-img" alt="">
                <img src="images/DUCKYKEY67AUSPDDBBHHC1.png" class="hover-img" alt="">
                <h3>Клавиатури</h3>
            </div>
        </a>

        <a href="SSD.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/SSD.jpg"  class="main-img" alt="">
                <img src="images/NVM.jpg" class="hover-img" alt="">
                <h3>SSD</h3>
            </div>
        </a>

        <a href="HardDisks.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/Harddrive.jpg"  class="main-img" alt="">
                <img src="images/harddisk.jpg" class="hover-img" alt="">
                <h3>Твърди дисконве</h3>
            </div>
        </a>
        <a href="Processors.php?variableName='ValueOfVariable" class="box">
            <div class="image">
                <img src="images/intel_core_i912900k.jpg" class="main-img" alt="">
                <img src="images/amd_ryzen_9_7900x.png" class="hover-img" alt="">
                <h3>Процесори</h3>

            </div>
            
            
        </a>
        <div class="box">
            <div class="image">
                <a href="PowerSupply.php?variableName='ValueOfVariable">
                    <img src="images/pawer suplay asus.jpg" class="main-img" alt="">
                    <img src="images/evga.jpg" class="hover-img" alt="">
                    <h3>Захранвания</h3>
                </a>
                
            </div>
        </div> 

        <div class="box">
            <div class="image">
                <a href="Coolers.php?variableName='ValueOfVariable">
                    <img src="images/be-quiet-shadow-rock-3-white-amd-am4-am3-intel-120-293515.jpg" class="main-img" alt="">
                    <img src="images/deepcool_cpu_cooler_gammaxx_gt_argb.jpg" class="hover-img" alt="">
                    <h3>Охладители</h3>
                </a>
                    
            </div> 
        </div>

        <div class="box">
            <div class="image">
                <a href="Monitors.php?variableName='ValueOfVariable">
                    <img src="images/acer.jpg" class="main-img" alt="">
                    <img src="images/bg-monitor-g95ts-lc49g95tssuxen-frontwhite-263199205.webp" class="hover-img" alt="">
                    <h3>Монитори</h3>
                </a>
                   
            </div> 
        </div>

        <div class="box">
            <div class="image">
                <a href="Ram.php?variableName='ValueOfVariable">
                    <img src="images/ram hyperx.webp" class="main-img" alt="">
                    <img src="images/ram corsair.png" class="hover-img" alt="">
                    <h3>RAM</h3>
                </a>
                    
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <a href="MousePads.php?variableName='ValueOfVariable">
                    <img src="images/mousepad.jpg" class="main-img" alt="">
                    <img src="images/cougar.jpg" class="hover-img" alt="">
                    <h3> Плодложки за мишки </h3>
                </a>
                  
            </div>
        </div>

      

    </div>

</section>

<!-- category section ends -->

<!-- products section starts  -->

<section class="products">

    <h1 class="heading"> СПЕЦИАЛНИ <span> ПРОДУКТИ</span> </h1>

    <div class="box-container">
        
        <?php
                $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 9"); 
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
              <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
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
      

</div>

        
</section>

<!-- products section ends -->

<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> <span>СДЕЛКА</span> НА ДЕНЯ </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/atdata.jpg" alt="">
            <div class="content">
                <span>Специална оферта</span>
                <h3> 15% отстъпка</h3>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_sdd.php?pid=4" class="btn">Вижте</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Lian li white.jpg" alt="">
            <div class="content">
                <span>Специална оферта</span>
                <h3>20% отстъпка</h3>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_boxes.php?pid=4" class="btn">Вижте</a>
            </div>
        </div>

    </div>
    
</section>

<!-- product banner section ends -->



<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>