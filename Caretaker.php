<?php

namespace App\Caretaker;

class Caretaker
{
    private $snapshot;

    public function setSnapshot($snapshot)
    {
        $this->snapshot = $snapshot;
    }

    public function getSnapshot()
    {
        return $this->snapshot;
    }
}
