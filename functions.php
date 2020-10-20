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

            <p>
                <?= $article['author']; ?>
            </p>

            <p>
                <?= $article['published_date']; ?>
            </p>

            <p>
                <?= $article['likes']; ?>
            </p>

            <div class="article_image"> <img src=" <?= $article['image'] ?>  " alt="image for article"> </div>
        </article>


<?php
    endforeach;
}

$allArticles = getArticle($articles);




?>