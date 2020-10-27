<?php require __DIR__ . '/header.php'; ?>


<main>
    <section>


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

                    <a href="/article.php?id=<?= $id ?>"> <button class="read_more"> Read more...</a> </button>


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




    </section>

</main>




<footer class="footer">

</footer>

</body>

</html>