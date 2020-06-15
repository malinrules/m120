<?php


function getPrices(){
 
$prices = [
    '1' => [
        'From' => 'Romanshorn',
        'To' => 'Frauenfeld',
        'Price' => '10.00'
    ],
    '2' => [
        'From' => 'Frauenfeld',
        'To' => 'Romanshorn',
        'Price' => '10.00'
    ],
    '3' => [
        'From' => 'Frauenfeld',
        'To' => 'Kreuzlingen',
        'Price' => '7.00'
    ],
    '4' => [
        'From' => 'Kreuzlingen',
        'To' => 'Romanshorn',
        'Price' => '12.00'
    ],
    '5' => [
        'From' => 'Romanshorn',
        'To' => 'Kreuzlingen',
        'Price' => '12.00'
    ],
    '6' => [
        'From' => 'Kreuzlingen',
        'To' => 'Frauenfeld',
        'Price' => '7.00'
    ],
    '7' => [
        'From' => 'Kreuzlingen',
        'To' => 'Kreuzlingen',
        'Price' => '1000000'
    ],
    
    '8' => [
        'From' => 'Frauenfeld',
        'To' => 'Frauenfeld',
        'Price' => '10000000'
    ],
    '9' => [
        'From' => 'Romanshorn',
        'To' => 'Romanshorn',
        'Price' => '10000000'
    ]
    ];
    return $prices;
}
?>