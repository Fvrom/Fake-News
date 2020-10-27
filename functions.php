<?php

require __DIR__ . '/data.php';

function sortPostByPublish(array $articles) 
{
    usort($articles, function ($a, $b) {
        return $b['published_date'] <=> $a['published_date'];

    });
    return $articles;
}

      



function getRandomAd($commercial)
{

    shuffle($commercial);

   

   return($commercial[0]);

   
    
}


function GetArticleById(array $articles, string $id): array {

    foreach ($articles as $article ) {
        if ($article['id'] === $id) {
            return $article; 
        }
    }
}
