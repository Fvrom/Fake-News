<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/footer.php'; ?>



<section id="container">
    <div id="main">
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

            <div class="main-content">

                <?php $articles = sortPostByPublish($articles); // sorting your articles with the function
                foreach ($articles as $article) :
                    $id = $article['id'] ?>
                    <!-- get id for every article -->

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

                        <a href="/article.php?id=<?= $id ?>" class="read_more_anchor"> <button class="read_more"> Read more...</a> </button>


                        <!-- <div class="article_text">

                            <p> <?= $article['content']; ?> </p>
                        </div> -->


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


                <?php
                endforeach; ?>


            </div>



        </div>
    </div>

</section>






</body>

</html>