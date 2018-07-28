<?php

/**
 * 格式化打印
 * @param mixed $data
 */
if (!function_exists('p')) {
    function p($data){
        echo '<pre>';
        print_r($data);
    }
}
