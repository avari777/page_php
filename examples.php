<?php

define('FOO', 'bar');

$someNumber = 123; // integer
$someFloat = 3.14; // float
$someText = 'foo'; // string
$someLongText = 'asdfasdf 
asdfasdf
asdf
asdf
asdf';

$someTrue = true; // boolean
$someNothing = null; // null

$someArray = [
    'asd',
    'das',
    true,
    123
]; // array
echo $someArray[1];

$someAssociativeArray = [
    5 => 'foo',
    6 => 'bar',
    'baz' => 'biz'
]; // associative array

$person = [
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21',
];
echo $person['age'];

$someMultiDimenssionalArray = [
    [
        'name' => 'John',
        'lastName' => 'Doe',
        'age' => '21',
    ],
    [
        'name' => 'Jane',
        'lastName' => 'Doe',
        'age' => '22',
    ]
];
echo $someMultiDimenssionalArray[1]['lastName'];
$someMultiDimenssionalArray[] = [
    'name' => 'Billy',
    'lastName' => 'Doe',
    'age' => '23',
];

// +
// -
// /
// *
// %
// . concatination

echo 'foo ' . 'bar' . '<br>';
echo 1 + 1 . '<br>'; // 2
echo 1 . 1 . '<br>'; // 11

$num = 1;
$num++;
--$num;
$num += 2;

// ==
// !=
// <
// >
// <= 
// >=

// ===
// !==
$num1 = 1;
$num2 = 2;
if ($num1 == 1 || $num2 == 2) {

} elseif(1 == 2) {

} else {

}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

// while(true) {

// }

// do {
    
// } while(false);

for ($i=0; $i < 50; $i++) {
    $out = '';
    if ($i % 2 == 0) {
        $out = 'Fizz ';
    } 
    if ($i % 3 == 0) {
        $out .= 'Bazz';
    }
    if (!$out) {
        $out = $i;
    }
    echo $out . '<br>';
}


$foo = 'RTU is amazing';
echo str_replace('RTU', 'RCS', $foo);

$string = 'abcdef';
$array = str_split($string);
$backToString = implode('', $array);
// var_dump($backToString);

// int (flot) -> str
echo 123 . '';

// string -> int
echo intval('123aa1');
echo floatval('3.14aa1');


function addTwoNumbers(int $num1, int $num2 = 10)
{
    return $num1 + $num2;
}
echo '<br><br><br>';
echo addTwoNumbers(1, 2);
echo addTwoNumbers(1);


