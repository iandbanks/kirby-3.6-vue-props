<?php
Kirby::plugin( 'iandbanks/imagerandomizer', [
    'sections'   => [
        'imagerandomizer' => [
            'props' => [
                'src' => function() {
                    return "https://source.unsplash.com/random/300x300?technology";
                },
                'src2' => function(){
                    return "https://source.unsplash.com/random/300x300?fruit";
                }
            ]
        ],
    ]
] );
