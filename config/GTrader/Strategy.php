<?php

return [

    'children_ns'           => 'Strategies',
    'default_child'         => env('STRATEGY_DEFAULT',         'Fann'),
    'available'             => ['Dummy', 'Fann'],
    'spitfire'              => false,
];
