<?php

class ParentSample
{
    public function sample() {

        try{
            throw new Exception();
        } catch(Exception $e) {
            echo $e;
        }
    }
}

class Child extends ParentSample
{
    private $_sample;
    public function __construct() {
        $this->_sample = 'sample';
    }

    public function isSample() {
        $sample = parent::sample();
        echo "\nsampleをechoします！\n";
        return $sample;
    }
}

$child = new Child();
$aa = $child->isSample();
var_dump($aa);
