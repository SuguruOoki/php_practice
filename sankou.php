<?php


function sanko($sample) {
    return $sample ? '成功！' : '失敗！';
}

var_dump(sanko('sample'), sanko(''), sanko(null), sanko(0));

var_dump($status ? '成功!' : '失敗！');
