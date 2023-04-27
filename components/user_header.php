<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

    <a href="home.php?variableName='ValueOfVariable" class="logo"> <i class="fa-solid fa-desktop"> Modern Desktop</i></i></a>
    <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>

    </div>

    

    <form action="" class="search-form" method = "post">
        <a href="search_form.php"><input type="search"  id="search-box" placeholder="Търсете тук..."></a>
        
    </form> 
    

    <div class="icons">
       <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         
         <div id="search-btn" class="fas fa-search"></div>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <a href="login.php?variableName='ValueOfVariable"> <i class="fas fa-user"></i></a>
    </div>

</header>
 
<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="images/user.avif" alt="">
        <?php           
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_profile.php?variableName='ValueOfVariable"  class="btn" >Обновяване на профил</a>
         <a href="myOrders.php?myorders=ValueofMyorders"  class="btn" >Моите поръчки</a>
         <a href="components/user_logout.php"  class="btn" onclick="return confirm('logout from the website?');">Излез от профил</a> 
         <?php
            }else{
         ?>
         <p> Моля първо влезте в профила си или се регистрирайте!</p>
         <div class="flex-btn">
            <a href="register.php?variableName='ValueOfVariable"  class="btn">Регистрирайте се!</a>
            <a href="login.php?variableName='ValueOfVariable"  class="btn">Влезте в профила си</a>
            <a href="admin/admin_login.php"  class="btn">Влезте като администратор</a>
         </div>
         <?php
            }
         ?>      
    </div>

    <nav class="navbar">
        <a href="home.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Начало </a>
        <a href="about.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> За нас </a>
        <a href="products.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Продукти </a>
        <a href="contact.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Контакт с нас </a>
        <a href="login.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Вход </a>
        <a href="register.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Регистрация </a>
        <a href="cart.php?variableName='ValueOfVariable"> <i class="fas fa-angle-right"></i> Количка </a>
    </nav>

</div>
</header>