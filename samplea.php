<?php

function sample() {

    $gift_wrap_type = '';
    $gift_wrap_price = 1;
    
    return mb_strlen(trim($gift_wrap_type)) !== 0 || $gift_wrap_price;
}

var_dump(sample());
