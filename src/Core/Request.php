<?php

namespace Akimov\Crud\Core;

class Request
{
    public function __construct(
        private array $params = []
    ) {
    }

    /**
     * getParams
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}