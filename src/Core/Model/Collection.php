<?php

namespace Akimov\Crud\Core\Model;

use Akimov\Crud\Core\Model\Collection\Collection as AbsctractCollection;

final class Collection extends AbsctractCollection
{

    protected $className;

    /**
     * return collection by object
     *
     * @return string
     */
    protected function type(): string
    {
        return $this->className::class;
    }
    
    /**
     * get collection
     *
     * @return void
     */
    public function getCollection()
    {
        return $this->type();
    }

    /**
     * Get the value of className
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set the value of className
     */
    public function setClassName($className): void
    {
        $this->className = $className;
    }
}