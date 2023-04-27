<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';


if(isset($_POST['send'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);
    $subject = $_POST['subj'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
 
    $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ? AND subject = ?");
    $select_message->execute([$name, $email, $number, $msg,$subject]);
 
    if($select_message->rowCount() > 0){
       $message[] = 'Вече изпротихте съобщение!';
    }else{
 
       $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message,subject) VALUES(?,?,?,?,?,?)");
       $insert_message->execute([$user_id, $name, $email, $number, $msg, $subject]);
 
       $message[] = 'Съобщението е изпратено успешно!';
 
    }
 
 }

 if(isset($_POST['sending'])){

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $select_subscribers = $conn->prepare("SELECT * FROM `subscribers` WHERE email = ?");
    $select_subscribers->execute([$email]);
    if($select_subscribers->rowCount() > 0){
        $message[] = 'Вие вече сте абонат!';
     }else{
  
        $insert_message = $conn->prepare("INSERT INTO `subscribers`(user_id,email) VALUES(?,?)");
        $insert_message->execute([$user_id,$email]);
  
        $message[] = 'Вие сте абониран!';
  
     }
  
 }
 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>За нас</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<?php include 'components/user_header.php'; ?>



<!-- contact info section starts  -->

<section class="info-container">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map"></i>
            <h3>Адрес</h3>
            <p>Пловдив, България - 4000</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>moderndesktop@gmail.com</p>
            <p>moderndesktopclients@gmail.com</p>
        </div>

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Номер</h3>
            <p>0893 99 93 82</p>
            <p>0895 44 25 67</p>
        </div>

    </div>

</section>

<!-- contact info section ends -->

<!-- contact section starts  -->

<section class="contact">

    <form action="" method="post">
        <h3>Дръжте ме в течение</h3>
        <p>Имате въпроси към нас?</p>
        <div class="inputBox">
         <input type="text" name="name" placeholder="Въвезете вашето име" required maxlength="20" class="box">
         <input type="email" name="email" placeholder="Въведете вашия email" required maxlength="50" class="box">
        </div>
        <div class="inputBox">
            <input type="number" name="number" min="0" max="9999999999" placeholder="Въведете вашия номер" required onkeypress="if(this.value.length == 10) return false;" class="box">
            <input type="text" name="subj" placeholder="Тема"  required maxlength="20" class="box">
        </div>
        <textarea name="msg" class="box" placeholder="Въведете вашето съобщение" cols="30" rows="10"></textarea>
        <input type="submit" value="Изпратете съобщение" name="send" class="btn">
    </form>

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23667.057186150036!2d24.72847720176118!3d42.142108518917055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1b09a7b7321%3A0xcea683bb97f2a9a1!2z0J_Qu9C-0LLQtNC40LIg0KbQtdC90YLRitGALCDQn9C70L7QstC00LjQsg!5e0!3m2!1sbg!2sbg!4v1674920089889!5m2!1sbg!2sbg" allowfullscreen="" loading="lazy"></iframe>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>Бюлетин</h3>
        <p>Абонирайте се за седмичения ни бюлетин.</p>
    </div>

    <form action=""  method="post">
        <input type="email" name="email" placeholder="Въведет вашия еmail" required maxlength="50" class="email">
        <input type="submit" value="Абонирай се"  name="sending" class="btn">
    </form>

</section>

<!-- newsletter section ends -->



 











<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>