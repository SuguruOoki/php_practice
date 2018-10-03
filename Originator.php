<?php

namespace App\Originator;

use App\Memento\Memento;

class Originator
{
    private $list = [];

    public function createMemento()
    {
        return new Memento($this->list);
    }
    public function restoreMemento(Memento $memento)
    {
        $this->list = $memento->getList();
    }

    public function addList($list)
    {
        $this->list[] = $list;
    }

    public function getList()
    {
        return $this->list;
    }

    public function display()
    {
        foreach ($this->getList() as $item) {
            echo sprintf('<li>%s</li>', $item);
        }
    }
}
