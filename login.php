<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email']; // Прочитаме стойността на електронната поща от POST заявката и я записваме в променливата $email;
   $email = filter_var($email, FILTER_SANITIZE_STRING); // Филтрираме електронната поща, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;
   $pass = sha1($_POST['pass']); // Хешираме стойността на паролата с SHA1 хеш функцията;
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); // Филтрираме паролата, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING; 

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'Непавилана парола или потребителско име!';
   }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>

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

<!-- login form section starts  -->

<section class="login">

    <form action=""  method="post">
        <h3> Влезте сега</h3>
        <input type="email" name="email" placeholder="Въведете вашия email" maxlength="50" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="password" name="pass" placeholder="Въведете вашата парола" maxlength="20"  class="box" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Запомни ме </label>
        </div>
        <input type="submit" value="Влезте сега" class="btn"  name="submit">
        <p>Нямате акунт?</p>
        <a href="register.php?variableName='ValueOfVariable" class="btn link">Регисрирайте се сега</a>
    </form>

</section>

<!-- login form section ends  -->














<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>