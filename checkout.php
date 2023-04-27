<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['order'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $method = filter_var($method, FILTER_SANITIZE_STRING);
   $address = 'flat no. '. $_POST['flat'] .', '. $_POST['street'] .', '. $_POST['city'] .', '. $_POST['state'] .', '. $_POST['country'] .' - '. $_POST['pin_code'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   

   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if($check_cart->rowCount() > 0){

      $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

      $insert_order = $conn->prepare("INSERT INTO `myorders`(user_id, name, number, total_products, total_price) VALUES(?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number,$total_products, $total_price]);

      $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);

      $message[] = 'Вашата поръчка е завършена успешно!';
   }else{
      $message[] = 'Вашата колика е празна';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завършване на поръчка</title>

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

<section class="checkout-orders">

   <form action="" method="POST">

   <h3>Вашите поръчки</h3>

      <div class="display-orders">
      <?php
         $grand_total = 0;
         $cart_items[] = '';
         $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $select_cart->execute([$user_id]);
         if($select_cart->rowCount() > 0){
            while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
               $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
               $total_products = implode($cart_items);
               $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
      ?>
         <p> <?= $fetch_cart['name']; ?> <span>(<?= 'BGN'.$fetch_cart['price'].'/- x '. $fetch_cart['quantity']; ?>)</span> </p>
      <?php
            }
         }else{
            echo '<p class="empty">Твоята количка е празна!</p>';
         }
      ?>
         <input type="hidden" name="total_products" value="<?= $total_products; ?>">
         <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
         <div class="grant-total">Крайна цена: <span><?= $grand_total; ?>лв.</span></div>
      </div>

      <h3>Направете вашите поръчки</h3>

      <div class="flex">
         <div class="inputBox">
            <span>Вашето име :</span>
            <input type="text" name="name" placeholder="Име фамилия" class="box" maxlength="20" required>
         </div>
         <div class="inputBox">
            <span>Вашия номер :</span>
            <input type="number" name="number" placeholder="телефонен номер" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
         </div>
         <div class="inputBox">
            <span>Вашия email :</span>
            <input type="email" name="email" placeholder="Въведете вашия email" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Метод на плащане :</span>
            <select name="method" class="box" required>
               <option value="cash on delivery">При доставка</option>
            </select>
         </div>
         <div class="inputBox">
            <span> Улица :</span>
            <input type="text" name="flat" placeholder="Име на улица" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span> Номер :</span>
            <input type="text" name="street" placeholder="Номер,етаж,апартамент" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span> Град :</span>
            <input type="text" name="city" placeholder=" Пловдив" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Община :</span>
            <input type="text" name="state" placeholder="Община Пловдив" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Държава :</span>
            <input type="text" name="country" placeholder="България" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>Пощенски код :</span>
            <input type="number" min="0" name="pin_code" placeholder="4000" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="box" required>
         </div>
      </div>

      <input type="submit" name="order" class="btn1 <?= ($grand_total > 1)?'':'disabled'; ?>" value="Завършване на поръчка">

   </form>

</section>



<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>