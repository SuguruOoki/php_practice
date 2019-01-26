<?php

/**
 * try-catch-finally については
 * tryで例外が起こるとfinallyが実行されたのちに
 * catchの中身が実行される。
 * もし、finallyのなかにreturnが書かれてしまうと
 * try-catchの例外の内容が握りつぶされることになる。
 * このクラスを実行すると、$eの内容がなくなっていることが
 * 確認できる。
 */
class Sample {
    public function returnsample()
    {
        try {
            echo 'try!';
            throw new Exception('sample!');
            return 'try!!!';
        } catch (Exception $e) {
            echo 'catch!';
            echo $e;
            return 'catch';
        } finally {
            echo 'finally statement is executed!';
            return 'Crush the exeception';
        }

    }
}

$a = new Sample();

$sample = $a->returnsample();

// 例外が出たにも関わらず、ここの中身については
// 出力されている。
echo "\n\nsample output!\n";
echo $sample;
