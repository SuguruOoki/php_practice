<?php

namespace App\Memento;

class Memento
{
    private $list;

    public function __construct($list)
    {
        $this->list = $list;
    }

    public function getList()
    {
        return $this->list;
    }
}
