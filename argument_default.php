<?php

class ArgumentTest {
    public function test($arg = 'sample')
    {
        echo $arg;
    }
}

$a = new ArgumentTest();
$a->test(null);

