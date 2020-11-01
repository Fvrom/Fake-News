<?php


require __DIR__ . '/header.php';
require __DIR__ . '/footer.php';

$articles = sortPostByPublish($articles); // sorting your articles with the function
?>

<?php
$id = $_GET['id'];
$article = getArticleById($articles, $id); ?>

<section>
    <!-- wrapping everything in main so sidebar and content work in flex -->
    <div class="wrapping_articles_sidebar">
        <div class="sidebar">
            <div class="ads">

                <?php $ad = getRandomAd($commercial);
                ?>
                <h3>
                    <?php echo $ad['title'];
                    ?> </h3>
                <p> <?php echo $ad['content'];
                    ?> </p>


            </div>
        </div>

        <div class="main-content_article">

            <article class="article_wrapper">

                <h2 class="title_content">
                    <?= $article['title']; ?>
                </h2>


                <div class="article_image_article">
                    <img src=" <?= $article['image'] ?>  " alt="image for article">
                </div>


                <div class="article_subtext_article">

                    <p> <?= $article['subtext']; ?> </p>
                </div>



                <div class="article_text_article">

                    <p> <?= $article['content']; ?> </p>
                </div>


                <div class="info_wrapper_article">
                    <p class="info_item_article">
                        Written by: <br>
                        <?= $article['author']; ?>
                    </p>

                    <p class="info_item_article">
                        Published: <br>
                        <?= $article['published_date']; ?>
                    </p>


                </div>

                <div class="like_wrapper">
                    <button class="likes">
                        Likes
                        <?= $article['likes']; ?> </button>

                </div>


            </article>




        </div>




</section>