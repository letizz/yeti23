<?php

$is_auth = rand(0, 1);

$user_name = 'Letiz'; // укажите здесь ваше имя
$categories_list = [
    'boards' => 'Доски и лыжи',
    'attachment' => 'Крепления',
    'boots' => 'Ботинки',
    'clothing' => 'Одежда',
    'tools' => 'Инструменты',
    'other' => 'Разное'
];

// Массив объявлений
$announcements_list = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'boards',
        'price' => 10999,
        'picture' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'boards',
        'price' => 159999,
        'picture' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'attachment',
        'price' => 8000,
        'picture' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'boots',
        'price' => 10999,
        'picture' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'clothing',
        'price' => 7500,
        'picture' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'other',
        'price' => 5400,
        'picture' => 'img/lot-6.jpg'
    ]
];
function sum_format($number, $withRubleElem = true){
    $number = ceil($number);

    if ($number >= 1000){
        $price = number_format($number, 0, '.', ' ');
    }
    else{
        $price = $number;
    }

    if ($withRubleElem){
        return $price."<b class=\"rub\">р</b>";
    }
    else{
        return $price;
    }
}

function compile_template($template, $template_data) {
    if (file_exists('templates/' . $template)) {
        ob_start('ob_gzhandler');
        extract($template_data);
        require_once('templates/' . $template);

        return ob_get_clean();
    } else {
        return '';
    }
}
?>
