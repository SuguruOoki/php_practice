<?php

class ParentSample {
    public $sample = [];

    public function __construct() {
        echo '親クラスのコンストラクタが呼ばれました。';
        $this->sample[] = 'parent_sample';
        var_dump('parent:', $this->sample);
   }
}
$sample = new ParentSample();
