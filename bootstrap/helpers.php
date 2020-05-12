<?php
/**
 * 自定义辅助函数
 * 需要修改 composer.json 文件，并找到 autoload 段
 * composer dumpautoload
 */

function test_helper() {
    return 'ok';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

// 默认的精度为小数点后两位
function big_number($number, $scale = 2)
{
    return new \Moontoast\Math\BigNumber($number, $scale);
}