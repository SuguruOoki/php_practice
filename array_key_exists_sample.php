<?php

// array_key_exists() は実は厳密比較ではない
$array_sample = array(
    '1' => 'string shipping',
    // 1 => 'number shipping'
);

var_dump(array_key_exists(1, $array_sample));

$array_sample2 = array(
    'ship' => 'string shipping',
     // ship  => 'not key shipping'
);

// 実はFatal Errorにはならない
// 定数が定義されていないよというWarningとなる
// しかも返ってくるのはtrue
var_dump(array_key_exists(ship, $array_sample2));

$array_sample3 = array(
    // 'ship' => 'string shipping',
    ship  => 'not key shipping'
);

// こちらも二番目と同じ
var_dump(array_key_exists(ship, $array_sample3));


