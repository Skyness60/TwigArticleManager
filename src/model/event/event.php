<?php

class Event
{
    private int $id;
    private string $title;
    private string $content;
    private string $image;
    private DateTime $start_at;
    private DateTime $time;
    private int $price;
    private Date $created_at;
    private Date $updated_at;
    private Date $delected_at;
    private bool $enabled;

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of start_at
     */
    public function getStartAt(): DateTime
    {
        return $this->start_at;
    }

    /**
     * Set the value of start_at
     */
    public function setStartAt(DateTime $start_at): self
    {
        $this->start_at = $start_at;

        return $this;
    }

    /**
     * Get the value of time
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * Set the value of time
     */
    public function setTime(DateTime $time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt(): Date
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt(Date $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt(): Date
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     */
    public function setUpdatedAt(Date $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of delected_at
     */
    public function getDelectedAt(): Date
    {
        return $this->delected_at;
    }

    /**
     * Set the value of delected_at
     */
    public function setDelectedAt(Date $delected_at): self
    {
        $this->delected_at = $delected_at;

        return $this;
    }

    /**
     * Get the value of enabled
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}