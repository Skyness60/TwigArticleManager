<?php 

namespace App\Repository;

use App\Model\Article;

class ArticleRepository 
{ 
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getArticles($page, $articlesPerPage) 
    {
        $sql = "SELECT * FROM article WHERE enabled = :enabled LIMIT :limit OFFSET :offset";
        $offset = ($page - 1) * $articlesPerPage;
        $enabled = 1;
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':enabled', $enabled, PDO::PARAM_BOOL);
        $statement->bindParam(':limit', $articlesPerPage, PDO::PARAM_INT);
        $statement->bindParam(':offset', $offset, PDO::PARAM_INT);
        $statement->execute();
        $articles = [];

        while ($row = $statement->fetch()) {
            $article = new Article();
            $article->setTitle($row['title']);
            $article->setContent($row['content']);
            $article->setImage($row['image']);
            array_push($articles, $article);
        }

        return $articles;
    }

    public function getArticle($id) 
    {
        $sql = "SELECT * FROM article WHERE id = :id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function countArticles()
    {
        return 1;
    }

    public function getLatestArticles($limit, $isEnabled)
    {
        $sql = "SELECT * FROM article WHERE enabled = :enabled ORDER BY created_at DESC LIMIT :limit";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':enabled', $isEnabled, \PDO::PARAM_BOOL);
        $statement->bindParam(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        $articles = [];

        while ($row = $statement->fetch()) {
            $article = new Article();
            $article->setTitle($row['title']);
            $article->setContent($row['content']);
            $article->setImage($row['image']);
            array_push($articles, $article);
        }

        return $articles;
    }
}