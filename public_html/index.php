<?php
require '../bootloader.php';

$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--    <script defer src="media/js/app.js"></script>-->
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section class="picture">
            </section>
            <section class="wrapper container">
                <div class="min_picture">
                    <div class="img_one">
                    </div>
                    <p class="service_name">Asmeninis treneris</p>
                    <p>Individualių treniruočių programų sudarymas pagal Jūsų poreikius.</p>
                </div>

                <div class="min_picture">
                    <div class="img_two">
                    </div>
                    <p class="service_name">Dėmesinga prieiūra</p>
                    <p>Padėsime efektyviai sportuoti ir pasiekti norimų rezultatų.</p>
                </div>

                <div class="min_picture">
                    <div class="img_three">
                    </div>
                    <p class="service_name">Grupinės treniruotės</p>
                    <p>Siūlome sportuoti jaukioje ir modernioje sporto klubo salėje</p>
                </div>
            </section>
        </main>   
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d576.0548892993897!2d25.33733812921485!3d54.72335277328968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1567498029767!5m2!1slt!2slt" width="100%" height="100%"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </section>

        <footer>
            <?php print $footer->render(); ?>
        </footer>
    </body>
</html>
