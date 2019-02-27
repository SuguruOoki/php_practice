<?php

ini_set('error_reporting', 'E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR');

class Worker {
    private $exec_program_args;

    public function __construct(string $args)
    {
        $this->exec_program_args = $args;
        var_dump($this->exec_program_args);
    }

    public function execute()
    {
        var_dump('スクリプトを実行します！');
        try {
            system("php $this->exec_program_args");
        } catch (Exception $e) {
            var_dump('例外です！:', $e);
        }
        var_dump('実行しました！');
    }
}


$worker = new Worker($argv[1]);
$worker->execute();
