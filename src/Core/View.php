<?php

namespace Akimov\Crud\Core;

class View 
{

    public function render(string $template, array $vars = []): string
    {
        if(!empty($template)) {
            ob_start();
            extract($vars);
            require_once DIR_TEMPLATE . '/' . $template;
            return ob_get_clean();
        }
        return '';
    }
}