<?php

namespace Akimov\Crud;

class View 
{
    public function __construct(
        private string $templateDir = 'templates'
    )
    {
    }

    public function render(string $template, array $vars = []): string
    {
        if(!empty($template)) {
            ob_start();
            extract($vars);
            require_once dirname(__DIR__) . '/' . $this->templateDir . '/' . $template;
            return ob_get_clean();
        }
        return '';
    }
}