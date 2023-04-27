<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукти</title>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../css/admin_style.css">


</head>
<body>

    <?php include '../components/admin_header.php'; ?>

    <section class="dashboard">

    <h1 class="heading">Категории ПРОДУКТИ</h1>

    <div class="box-container">

    <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `products`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени общи продукти</p>
         <a href="products.php" class="btn">Вижте добавените общи продукти</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `boxes`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени кутии</p>
         <a href="boxes.php" class="btn">Вижте добавените кутии</a>
      </div>
      
      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `coolers`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени охладители</p>
         <a href="coolers.php" class="btn">Вижте добавените охладители</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `cpu`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени процесори</p>
         <a href="CPU.php" class="btn">Вижте добавените процесори</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `hdd`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени твърди дискове</p>
         <a href="hdd.php" class="btn">Вижте добавените твърди дискове</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `headphones`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени слушалки</p>
         <a href="headphones.php" class="btn">Вижте добавените слушалки</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `keyboards`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени клавиатури</p>
         <a href="keyboards.php" class="btn">Вижте добавените клавиатури</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `monitors`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени монитори</p>
         <a href="monitors.php" class="btn">Вижте добавените монитори</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `motherboards`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени дънни платки</p>
         <a href="motherboards.php" class="btn">Вижте добавените дънни платки</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `mouse`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени мишки</p>
         <a href="mouse.php" class="btn">Вижте добавените мишки</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `mousepads`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени подложки за мишки</p>
         <a href="mousepads.php" class="btn">Вижте добавените подложки за мишки</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `powersuply`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени захранвания</p>
         <a href="powersupply.php" class="btn">Вижте добавените захранвания</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `ram`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени ram памети</p>
         <a href="ram.php" class="btn">Вижте добавените ram памети</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `ssd`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени ssd-та</p>
         <a href="sdd.php" class="btn">Вижте добавените ssd-та</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `videocards`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>Добавени видео карти</p>
         <a href="video_cards.php" class="btn">Вижте добавените видео карти</a>
      </div>

    </div>

    </section>

    <script src="../js/admin_script.js"></script>
    
</body>
</html>