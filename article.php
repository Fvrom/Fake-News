<?php


require __DIR__ . '/header.php';

$articles = sortPostByPublish($articles); // sorting your articles with the function
?>

<?php
$id = $_GET['id'];
$article = getArticleById($articles, $id); ?>

<section>


    <div class="main-content">

        <article class="article_wrapper">

            <h2 class="title_content">
                <?= $article['title']; ?>
            </h2>


            <div class="article_image">
                <img src=" <?= $article['image'] ?>  " alt="image for article">
            </div>


            <div class="article_subtext">

                <p> <?= $article['subtext']; ?> </p>
            </div>



            <div class="article_text">

                <p> <?= $article['content']; ?> </p>
            </div>


            <div class="info_wrapper">
                <p class="info_item">
                    Written by: <br>
                    <?= $article['author']; ?>
                </p>

                <p class="info_item">
                    Published: <br>
                    <?= $article['published_date']; ?>
                </p>


            </div>

            <div class="like_wrapper">
                <button class="likes">
                    Likes
                    <?= $article['likes']; ?>

            </div>


        </article>




    </div>




</section>

</section>