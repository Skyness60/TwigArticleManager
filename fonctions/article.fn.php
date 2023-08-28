<?php

$articles = [
    0 => [
        "id" => 1,
        "title" => "Photo au dessus d'une montagne",
        "content" => "Cette photo a été prise en hommage à un grand alpiniste",
        "image" => "https://static-cse.canva.com/blob/996500/Sanstitre.jpg",
        "created_at" => "14/08/2023",
        "enabled" => true
    ], 
    1 => [
        "id" => 2,
        "title" => "Photo d'une forêt mystérieuse",
        "content" => "Explorez les secrets cachés de cette forêt enchanteresse",
        "image" => "https://static-cse.canva.com/blob/123456/Foret.jpg",
        "created_at" => "11/08/2023",
        "enabled" => false
    ], 
    2 => [
        "id" => 4,
        "title" => "Aurore boréale magique",
        "content" => "Laissez-vous émerveiller par le spectacle de l'aurore boréale dans le ciel nocturne",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/9/96/Aurore_bor%C3%A9ale_au_Saguenay%E2%88%92Lac-Saint-Jean.jpg",
        "created_at" => "05/04/2023",
        "enabled" => true
    ],
    3 => [
        "id" => 5,
        "title" => "Exploration urbaine",
        "content" => "Découvrez les rues animées de la ville et ses recoins cachés",
        "image" => "https://st.depositphotos.com/27201292/53543/i/450/depositphotos_535436052-stock-photo-an-old-abandoned-factory-in.jpg",
        "created_at" => "01/02/2023",
        "enabled" => true
    ],
    4 => [
        "id" => 3,
        "title" => "Aventure sous-marine",
        "content" => "Plongez dans les profondeurs de l'océan pour découvrir sa faune incroyable",
        "image" => "https://previews.123rf.com/images/yuliiajd/yuliiajd1705/yuliiajd170500227/78106965-fond-de-for%C3%AAt-myst%C3%A9rieuse-printemps-avec-chemin-d-acc%C3%A8s-sur-une-journ%C3%A9e-ensoleill%C3%A9e.jpg",
        "created_at" => "12/06/2023",
        "enabled" => true
    ]
];

function getArticles() 
{
    global $articles;
    return array_filter($articles, function ($article) {
        return $article['enabled'];
    });
}

function getArticle($id) 
{
    global $articles;
    $index = array_search($id, array_column($articles, 'id'));
    return $articles[$index];
}

?>