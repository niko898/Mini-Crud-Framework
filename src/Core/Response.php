<?php

namespace Akimov\Crud\Core;

class Response
{
    public function __construct(
        private string $body = '',
        private string $url = ''
    )
    {
        
    }

    /**
     * gtBody
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * setBody
     *
     * @param string $body
     * @return void
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * getUrl
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * setUrl
     *
     * @param string $url
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function render(): void
    {
        if(!empty($this->url)) {
            header('Location: ' . HTTP_SERVER . $this->url);
        }
        
        echo $this->body;
    }
}