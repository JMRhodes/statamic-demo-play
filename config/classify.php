<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Stylesets
    |--------------------------------------------------------------------------
    |
    | Here you can define different style collections.
    | To add a new styleset you have to add a new array like the 'blog' array.
    |
    */

    'default' => [
        'h1' => 'headline',
        'a'  => 'link',
        'p'  => 'mb-10 text-base leading-relaxed text-body-color dark:text-dark-6',
    ],

    'blog' => [
        //wow fadeInUp
        'h2' => 'mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]',
        'h3' => 'mb-6 text-2xl font-semibold text-dark dark:text-white sm:text-[28px] sm:leading-[40px]',
        'p'  => 'mb-6 text-base text-body-color dark:text-dark-6',
        'a'  => 'link',
    ],
];
