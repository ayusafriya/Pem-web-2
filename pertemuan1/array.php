<?php
// array bisa menyimpan banyak nilai dengan tipe data apapun)
// array indexing 
$animals = ['Kucing', 'Kelinci', 'Rusa'];

// Mengakses array indexing
echo $animals [1] . '<br>';

// foreach($animals as $animals) {
//    echo $animals . '<br>';}        (klo data nya banyak)

// array assosiatif (terdiri dari dictionary dan value)
$student1 = [
    'name' => 'Aldi',
    'nim' => 114607854,
    'major' => 'Information System'
];

// Mengakses array assosiatif
echo $student1['major'];