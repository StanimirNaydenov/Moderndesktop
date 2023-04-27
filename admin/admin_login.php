<?php

include '../components/connect.php';

session_start();

if(isset($_POST['submit'])){

   $name = $_POST['name']; // Прочитаме стойността на името от POST заявката и я записваме в променливата $name;
   $name = filter_var($name, FILTER_SANITIZE_STRING); // Филтрираме името, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;
   $pass = sha1($_POST['pass']); // Хешираме стойността на паролата с SHA1 хеш функцията;
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); // Филтрираме паролата, за да премахнем евентуални опасни символи, използвайки филтър от тип STRING;

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND password = ?"); //Подготвяме заявка за избор на администратор от базата данни, като използваме името и паролата като параметри;
   $select_admin->execute([$name, $pass]);

   if($select_admin->rowCount() > 0){
      $fetch_admin_id =$select_admin->fetch(PDO::FETCH_ASSOC); 
      $_SESSION['admin_id'] = $fetch_admin_id['id'];
      header('location:dashboard.php');
   }else{
      $message[] = 'Невалидна парола или потребителско име!';
      
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Вход за администратор</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

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

<section class="form-container">

   <form action="" method="post">
      <h3>Влез сега</h3>
      
      <input type="text" name="name" required placeholder="Въвдете вашето име" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="Въвъзете вашата парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Влезте сега" class="btn" name="submit">
   </form>

</section>
   
</body>
</html>