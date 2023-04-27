<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name']; // Запазва стойността на полето "name" от формата POST в променливата $name;
   $name = filter_var($name, FILTER_SANITIZE_STRING); // Филтрира и почиства променливата $name, използвайки функцията filter_var(), с аргумент FILTER_SANITIZE_STRING, която премахва всички HTML тагове и преобразува специални символи в съответните HTML кодове;

   $update_profile_name = $conn->prepare("UPDATE `admins` SET name = ? WHERE id = ?"); // С метода prepare() се създава подготвено SQL израз, който съдържа плейсхолдери (?) вместо стойности, които ще бъдат добавени по-късно;
   $update_profile_name->execute([$name, $admin_id]); // С метода execute() изпълнява подготвения израз с предадените стойности в масива [$name, $admin_id];

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709'; // Задава празен SHA1 хеш-код, който ще бъде използван за сравнение с хеш-кода на паролата, ако администраторът не е посочил нова парола;
   $prev_pass = $_POST['prev_pass']; // Запазва стойностите на полето "prev_pass" от формата POST;
   $old_pass = sha1($_POST['old_pass']); // Запазва стойностите на полето "old_pass" от формата POST;
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING); // Паролите се филтрират и почистват с функцията filter_var() с аргумент FILTER_SANITIZE_STRING, за да се премахнат всички HTML тагове и да се преобразуват специални символи в съответните HTML кодове.
   $new_pass = sha1($_POST['new_pass']); // Запазва стойностите на полето "new_pass" от формата POST;
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING); // Паролите се филтрират и почистват с функцията filter_var() с аргумент FILTER_SANITIZE_STRING, за да се премахнат всички HTML тагове и да се преобразуват специални символи в съответните HTML кодове.
   $confirm_pass = sha1($_POST['confirm_pass']); // Запазва стойностите на полето "confirm_pass" от формата POST;
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING); // Паролите се филтрират и почистват с функцията filter_var() с аргумент FILTER_SANITIZE_STRING, за да се премахнат всички HTML тагове и да се преобразуват специални символи в съответните HTML кодове.

   if($old_pass == $empty_pass){
      $message[] = 'Въведете старата парола!';
   }elseif($old_pass != $prev_pass){
      $message[] = 'Старата парола не съвпада!';
   }elseif($new_pass != $confirm_pass){
      $message[] = 'Потвърдената парола не съвпада!';
   }else{
      if($new_pass != $empty_pass){
         $update_admin_pass = $conn->prepare("UPDATE `admins` SET password = ? WHERE id = ?");
         $update_admin_pass->execute([$confirm_pass, $admin_id]);
         $message[] = 'Паролата е обнова успешно!';
      }else{
         $message[] = 'Моля въведете нова парола!';
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
   <title>Обновяване на профил</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Обновете профила си</h3>
      <input type="hidden" name="prev_pass" value="<?= $fetch_profile['password']; ?>">
      <input type="text" name="name" value="<?= $fetch_profile['name']; ?>" required placeholder="Въвдете вашето име" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="old_pass" placeholder="Въведете вашата стара парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="Въведете нова парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="confirm_pass" placeholder="Потвърдете ноата парола" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Обновете порофила си сега" class="btn" name="submit">
   </form>

</section>



<script src="../js/admin_script.js"></script>
   
</body>
</html>