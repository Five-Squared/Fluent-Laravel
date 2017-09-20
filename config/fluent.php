<?php
return [
    'key'      => env('FLUENT_KEY'),
    'secret'   => env('FLUENT_SECRET'),
    'sender'   => [
        'name'    => env('FLUENT_NAME'), 
        'address' => env('FLUENT_EMAIL')
    ],
    'debug'    => false,
];