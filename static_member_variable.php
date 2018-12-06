<?php

class StaticVariable {

    public static $static_sample = array(
        'one' => 'sample'
    );

    public function sample($sample)
    {
        var_dump($sample);
    }
}

var_dump(StaticVariable::$static_sample);

StaticVariable::$static_sample['two'] = 'sample_second';

echo "second\n";
var_dump(StaticVariable::$static_sample);

echo "instance\n";
$instance_sample = new StaticVariable();
var_dump($instance_sample::$static_sample);


$instance_sample::$static_sample['three'] = 'sample_third';

echo "third\n";
var_dump(StaticVariable::$static_sample);
