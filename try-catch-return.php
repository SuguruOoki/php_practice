<?php

/**
 * この状態だと、catchにおけるreturnは返っている。
 * そのため、var_dumpしている箇所にはfalseが存在する
 *
 */
class Sample {
    public function returnsample()
    {
        try {
            // echo 'try!';
            throw new Exception('sample!');
            return true;
        } catch (Exception $e) {
            // echo 'catch!';
            // echo $e;
            return false;
        }

    }
}

$a = new Sample();

$sample = $a->returnsample();
var_dump($sample);
