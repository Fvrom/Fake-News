<?php

require __DIR__ . '/data.php';



// function that prints out all info in my $articles array. 


/* 
function getArticle(array $articles): array
{

    $newarticle = [];

    foreach ($articles as $article) {
        $newarticle[] = $article;
    }

    return $newarticle;
}


$allArticles = getArticle($articles);

print_r($allArticles);
*/

function getArticle($articles)
{

    foreach ($articles as $article) : ?>
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



<?php
    endforeach;
}

$allArticles = getArticle($articles);

echo $allArticles;

?>