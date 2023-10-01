<?php

namespace Akimov\Crud\Model\Post;

class Post 
{
    private string $title;
    private string $text;

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setTitle(string $title): self {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of text
     *
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self {
        $this->text = $text;
        return $this;
    }
}