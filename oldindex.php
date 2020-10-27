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
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">




    <title>Fake News </title>
</head>

<body>
    <header>
        <h1> Fake Prophet </h1>
    </header>

    <section>


        <div class="wrapper">
            <!-- <div clasS="sidebar">
                <div class="ads">

                    <?php // $ad = getRandomAd($commercial); 
                    ?>
                    <h3>
                        <?php // echo $ad['title']; 
                        ?> </h3>
                    <p> <?php // echo $ad['content'];
                        ?> </p>


                </div>
            </div> -->

            <div class="main-content">

                <?php $articles = sortPostByPublish($articles); // sorting your articles with the function
                foreach ($articles as $article) : ?>
                    <article class="article_content">
                        <h2>
                            <?= $article['title']; ?>
                        </h2>
                        <p class="content">
                            <?= $article['content']; ?>
                        </p>
                        <div class="article_image"> <img src=" <?= $article['image'] ?>  " alt="image for article"> </div>

                        <div class="info_wrapper">
                            <p class="info_item">
                                Written by:
                                <?= $article['author']; ?>
                            </p>

                            <p class="info_item">
                                Published:
                                <?= $article['published_date']; ?>
                            </p>

                            <button class="info_item">
                                Likes:
                                <?= $article['likes']; ?>
                                </p>
                        </div>


                    </article>


                <?php
                endforeach; ?>


            </div>


        </div>

    </section>


    </div>

    <footer class="footer">
        <p> Footer</p>

    </footer>

</body>

</html>