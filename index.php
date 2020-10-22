<?php require __DIR__ . '/functions.php';
require __DIR__ . '/data.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="global.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,200;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">



    <title>Fake News </title>
</head>

<body>
    <header class="header">
        <h2>Fake News</h2>
    </header>

    <section>
        <div class="wrapper">
            <div clasS="sidebar">
                <div class="ads">
                    <?php getRandomAd($commercial) ?>


                </div>
            </div>

            <div class="main-content">



                <?php echo getArticle($articles); ?>


            </div>

            <div class="archive-sidebar">

            </div>
        </div>

    </section>


    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>

</html>