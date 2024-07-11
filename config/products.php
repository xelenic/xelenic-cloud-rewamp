<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    'product_type' => [
        'sass_tool' => 'SASS Tool',
        'in-build_application' => 'In Build Application',
        'self_hosted_application' => 'Self Hosted Application',
        'do_service' => 'Do Service',
        'aws_service' => 'Aws Service'
    ],

    'payment_type' => [
        'payment_required' => 'Payment Required',
        'free' => 'Free',
        'paid_item' => 'Paid Item'
    ]

];
