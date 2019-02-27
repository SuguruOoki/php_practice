<?php

try {
    echo 'command_line_script!';
    throw new Exception("Error Processing Request");
} catch (Exception $e) {
    var_dump($e);
}
