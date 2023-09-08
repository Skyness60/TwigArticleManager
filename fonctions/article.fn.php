<?php

function getArticles($db, $page, $articlesPerPage) 
{
    $sql = "SELECT * FROM article WHERE enabled = :enabled LIMIT :limit OFFSET :offset";
    $offset = ($page - 1) * $articlesPerPage;
    $enabled = 1;
    $statement = $db->prepare($sql);
    $statement->bindParam(':enabled', $enabled, PDO::PARAM_BOOL);
    $statement->bindParam(':limit', $articlesPerPage, PDO::PARAM_INT);
    $statement->bindParam(':offset', $offset, PDO::PARAM_INT);
    $statement->execute();

    return $statement->fetchAll();
}

function getArticle($db, $id) 
{
    $sql = "SELECT * FROM article WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    return $statement->fetch();
}

function countArticles()
{
    return 1;
}

