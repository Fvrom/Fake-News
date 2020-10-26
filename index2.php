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

        <button class="hamburger">
            <!-- burger menu taken from elinas lesson  -->
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                <g clip-path="url(#clip0)" fill="#fff">
                    <path d="M20 40a20 20 0 1120-20 20.022 20.022 0 01-20 20zm0-38.75A18.75 18.75 0 1038.75 20 18.772 18.772 0 0020 1.25z" />
                    <path d="M29.688 13.75H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25zM29.688 20.625H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25zM29.688 27.5H10.313a.625.625 0 110-1.25h19.374a.624.624 0 110 1.25z" />
                </g>
                <defs>
                    <clipPath id="clip0">
                        <path fill="#fff" d="M0 0h40v40H0z" />
                    </clipPath>
                </defs>
            </svg>
        </button>

    </header>

    <main>
        <section>


            <div class="main-content">

                <?php $articles = sortPostByPublish($articles); // sorting your articles with the function
                foreach ($articles as $article) :
                    $id = $article['id'] ?>
                    <!-- get id for every article -->

                    <article class="article_content">

                        <h2 class="title_content">
                            <?= $article['title']; ?>
                        </h2>


                        <div class="article_image"> <img src=" <?= $article['image'] ?>  " alt="image for article"> </div>


                        <div class="article-subtext">

                            <p> <?= $article['subtext']; ?> </p>
                        </div>

                        <button class="read_more"> Read more..</button>


                        <div class="article_text">

                            <p> <?= $article['content']; ?> </p>
                        </div>


                        <div class="info_wrapper">
                            <p class="info_item">
                                Written by: <br>
                                <?= $article['author']; ?>
                            </p>

                            <p class="info_item">
                                Published:
                                <?= $article['published_date']; ?>
                            </p>

                            <button class="likes">
                                Likes
                                <?= $article['likes']; ?>
                                </p>
                        </div>


                    </article>


                <?php
                endforeach; ?>


            </div>




        </section>

    </main>




    <footer class="footer">

    </footer>

</body>

</html>