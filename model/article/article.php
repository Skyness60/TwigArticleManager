<?php 

class Article
{
    private int $id;
    private string $title;
    private string $content;
    private string $image;
    private Date $created_at;
    private Date $updated_at;
    private Date $delected_at;
    private bool $enabled;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

}