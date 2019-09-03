<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
            <section class="wrapper">
                <div class="block">
                <h1>Atsiliepimai:</h1>     
                    <div id="person-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nr.</th>
                                    <th>Vardas</th>
                                    <th>Komentaras</th>
                                    <!--<th>Data</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows Are Dynamically Populated -->
                            </tbody>
                        </table>
                    </div>                    
                </div>
                <div class="block">        
                    <?php if(!App::$session->userLoggedIn()): ?>
                        <p>Norite parašyti komentarą? <a href="/register.php">Užsiregistruokite.</a></p>
                    <?php else: ?>
                        <?php print $createForm->render(); ?>
                    <?php endif; ?>
                    
                </div>
            </section>
        </main>

        <!-- Footer -->        
        <footer>
            <?php print $footer->render(); ?>
        </footer>

        <script defer src="media/js/app.js"></script>
    </body>
</html>
