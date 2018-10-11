<?php

/**
 * php7では普通に動作したが、
 * 5.1.6などでは動かなかった。
 * 5.4などで変わっている可能性がある。
 * 要調査。
 */ 
function regexDefine($sample) {
    define('AAA', "/T([0-9]*):/");
    $res = preg_match(AAA, $sample, $matched);
    var_dump($matched, $res);
}

$sample = '2013-06-26T08:00:00.000+09:00';

regexDefine($sample);
