<?php

class StringConcatSample
{
    const concat1 = 'sample1';

    function concat_sample() {
        var_dump("\n" . self::concat1 . "お急ぎ便だよ！\n");
    }
}

$sample = new StringConcatSample();

$sample->concat_sample();

