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
    <title>Начало</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<?php include 'components/user_header.php'; ?>



<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image" >
                <img src="images/razer8.jpg" alt="">
            </div>
            <div class="content">
             <span> Насладете се на едно ново ниво на гейминг преживяване с   </span>
             <br>
             <span>безжичните механични клавиатури на Razer BlackWidow!</span>
                <h3> Клавиатури</h3>
                <a href="Keyboard.php?variableName='ValueOfVariable" class="btn">Вижте</a>   


             </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/intel-vs-amd-banner-1.webp" alt="">
            </div>
            <div class="content1">
             <span> Вие избирате от кой отбор да сте   </span>
             <br>
             <span>станете част от отбора на Intel или AMD!</span>
                <h3> Процесори </h3>
                <a href="Processors.php?variableName='ValueOfVariable" class="btn">Вижте</a>   

             </div>
            
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/asus rog.png" alt="">
            </div>
            <div class="content2">
             <span>ASUS Z790 SERIES   </span>
             <br>
             <span>REIGN SUPREME</span>
             <br>
             <span> Разгледайте наличния модел!</span>
                <h3> Дънни платки </h3>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view.php?pid=16" class="btn">Вижте</a>   

             </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">

        <a href="Keyboard.php?variableName='ValueOfVariable" class="box">
            <img src="images/BlackWidow1.jpg" alt="">
            <div class="content">
                <span> Специална оферта</span>
                <h3>До 50%</h3>
            </div>
        </a>

        <a href="Mouse.php?variableName='ValueOfVariable" class="box">
            <img src="images/Logitech.jpg" alt="">
            <div class="content">
                <span>Специална оферта</span>
                <h3>До 40%</h3>
            </div>
        </a>

        <a href="Video Cards.php?variableName='ValueOfVariable" class="box">
            <img src="images/Nvidia 1660.jpg" alt="">
            <div class="content">
                <span>Специална оферта</span>
                <h3> До 50%</h3>
            </div>
        </a>
        
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->

<section class="arrivals">

    <h1 class="heading"> НОВИ <span> ПРОДУКТИ </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/4090.png" class="main-img" alt="">
                <img src="images/rtx 4080.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>MSI GeForce RTX 4090 GAMING X TRIO 24G</h3>
                <div class="price"> 4489лв.<span></span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_gpu.php?pid=3" class="btn">Вижте</a>

                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/88305_02_nvidia-geforce-rtx-4080-rumors-16gb-and-12gb-variants-from-aibs_full.png" class="main-img" alt="">
                <img src="images/rtx 4080.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>MSI GeForce RTX 4080 GAMING X TRIO 16GB</h3>
                <div class="price"> 3359лв. <span></span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_gpu.php?pid=2" class="btn">Вижте</a>
        
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/i7.jpg" class="main-img" alt="">
                <img src="images/core.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Intel Core i7-13700KF</h3>
                <div class="price"> 871лв. <span>979лв.</span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_cpu.php?pid=1" class="btn">Вижте</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/box.png" class="main-img" alt="">
                <img src="images/Asus Tuf.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>ASUS TUF Gaming 750W 80+ Gold</h3>
                <div class="price"> 288лв. <span></span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_powersupply.php?pid=1" class="btn">Вижте</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/Alian.jpg" class="main-img" alt="">
                <img src="images/EcranPC.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Alienware AW2723DF</h3>
                <div class="price"> 1068лв. <span>1349лв.</span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_monitors.php?pid=4" class="btn">Вижте</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ram.jpg" class="main-img" alt="">
                <img src="images/ram1.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>32GB (2x16GB) DDR5 6200MHz Corsair Vengeance RGB White</h3>
                <div class="price"> 770лв. <span>839лв.</span> </div>
                <a href="http://localhost/courseProject/poject%20files%20-%20Copy/quick_view_ram.php?pid=6" class="btn">Вижте</a>
            
            </div>
        </div>

    </div>

</section>

<!-- arrivals section ends -->


<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->


<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>