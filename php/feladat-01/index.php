<?php

/**
 * Feladat 01:
 * A $szoveg tartalmát válaszd szét a ";"-k mentén.
 * Azokat a részeket, amiben van "u" betű mentsd el a $tomb külön-külön elemeibe, sorban a 0. indextől kezdve.
 */

$szoveg = 'ubeu;dubuaedv;eugbuoqw;sdfqobf;dslbuv;hiqfb;dsviqf;bh28;buas33;vhais3;7vb;bue';

$tomb = [];

// innentől lefelé írd be a te kódodat



// a végén ezzel irasd ki az eredményt
var_dump($tomb);

// innentől lefelé már ne módosítsd a filet, ez fogja kiírni, hogy jó-e a megoldásod
$joEredmeny = [
    'ubeu',
    'dubuaedv',
    'eugbuoqw',
    'dslbuv',
    'buas33',
    'bue',
];

var_dump($joEredmeny === $tomb ? 'Siker!' : 'Valami még nem stimmel.');
