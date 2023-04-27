<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name']; // Прочитаме стойността на името от POST заявката и я записваме в променливата $name;
   $name = filter_var($name, FILTER_SANITIZE_STRING); // Филтрираме името, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;
   $pass = sha1($_POST['pass']); //Хешираме стойността на паролата с SHA1 хеш функцията;
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); // Филтрираме паролата, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;
   $cpass = sha1($_POST['cpass']); // Хешираме стойността на повторената парола с SHA1 хеш функцията;
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING); // Филтрираме повторената парола, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?"); // Подготвяме заявка за избор на администратор от базата данни, като използваме името, подадено в POST заявката като параметър;
   $select_admin->execute([$name]); //Изпълняваме заявката за избор на администратор от базата данни, като подаваме името, което е филтрирано и записано в променливата $name, като параметър;

   if($select_admin->rowCount() > 0){
      $message[] = 'Потребителското име вече съществува!';
   }else{
      if($pass != $cpass){
         $message[] = 'Паролата за потвърждение не съвпада!';
      }else{
         $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password) VALUES(?,?)");
         $insert_admin->execute([$name, $cpass]);
         $message[] = 'Регистрацията за нов админ е успшна!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Регистрация за администратор</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Регистрирай се сега</h3>
      <input type="text" name="name" required placeholder="Въведете вашето име" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="Въведете вашата парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="Потвърдете вашата парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Регистрирай се сега" class="btn" name="submit">
   </form>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>