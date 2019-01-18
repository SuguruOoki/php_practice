<?php

class sample {
    const a = 0777;
    public static function ex()
    {
        echo self::a;
        echo (string)self::a;
    }
}
sample::ex();
