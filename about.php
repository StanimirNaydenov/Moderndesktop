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
    <title>За нас</title>

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

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/about-us-page.png" alt="">
    </div>

    <div class="content">
        <h3>За нас</h3>
        <p> Modern Desktop не е поредният сайт за периферия и хардуер, а е място, което ти гарантира позитивно отношение и страхотно обслужване. От създаването на Modern Desktop ние не сме спрели и за минута да помагаме на геймърите, за да открият най-добрият продукт за тях. Ние сме самостоятелно звено на една от големите дистрибуторски компютърни фирми в България като предлагаме безплатна доставка за поръчки над 99.00 лв за цялата страна на пълното ни портфолио от продукти. Вие ни познавате тъй като екипът на Modern Desktop е съставен от група професионалисти. Modern Desktop e официален търговски представител и сервизен партньор за България на марките, които предлагаме на сайта, което ви гарантира качествено следпродажбено обслужване.</p>
        
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> Въпроси и  <span>отговори</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Защо не ми признават гаранцията на лаптопа, таблета, смартфона? Нали е в гаранционен срок.</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Когато техниката се експлоатира при нормални условия, описани в изискванията на производителя, няма основание за отказ от гаранционно обслужване. Има ситуации, в които производителят отказва гаранционно обслужване. Такива случаи са всички повреди причинени вследствие на механично въздействие - удар, изтърване, натиск, също така измокряне , заливане и др. Изкъртени портове, жакове, бутони също не са гаранционен проблем. Токовите удари и изгорели портове не са обект на гаранционно обслужване. По-подробна информация относно отказа на гаранционно обслужване може да намерите в гаранционните условия на производителят. За всяка техника, на която се отказва гаранционен сервиз се издава констативен протокол, в който са описани причините за отказ от гаранция. За да си спестите нервите и да не губите пари, застраховайте техниката си срещу случайни повреди. Попитайте Вашият консултант за условията на застраховката.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Кредити. Информация за вноски, необходими условия които трябва да покрия?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                За кредит може да кандидатствате онлайн, като натиснете бутона, на който е изписана месечна вноска. Той се намира до бутона "Купи". След това изберете броят месечни вниски за кредита.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Какви са начините за поръчка?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Може да направите поръчката си през сайта, чат системата.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3> Коя куриерска фирма използвате за доставка?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                За доставки използваме куриерски компании Спиди и Еконт и доставяме както до офис на куриера, така и до адреса Ви (избира се при поръчка).
            </p>
        </div>

</section>


<!-- footer section starts  -->

<?php include 'components/footer.php'; ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>