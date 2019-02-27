<?php

class Worker {
    private $exec_program_args;

    public function __construct(array $args)
    {
        $this->exec_program_args = $args;
    }

    public function execute()
    {
        system("php $this->exec_program_args");
    }
}


$worker = new Worker($argv);
$worker->execute();
