<?php

class ClassName {
    public static function sample(array $sample)
    {
        if ($sample === []) {
            echo 'empty!';
        } else {
            echo 'not empty...';
        }
    }
}

ClassName::sample(array());

class dataProvider {
    public function dataprovider()
    {
        return array(
            'sample' =>
        )
    }
}
