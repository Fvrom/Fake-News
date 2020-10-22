<?php

require __DIR__ . '/data.php';


function getArticle($articles)
{

    foreach ($articles as $article) : ?>
        <article class="article_content">
            <h2>
                <?= $article['title']; ?>
            </h2>
            <p>
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
    endforeach;
}



function getRandomAd($commercial)
{

    require __DIR__ . '/data.php';

    shuffle($commercial);


    return $commerical[0];
}


?>