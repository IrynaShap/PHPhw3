<?php
$integer = 0;
$string = "";
$boolean = false;
$float = 0.0;
$null = null;

echo "Порівняння integer і string\n";
echo "Не суворе порівняння\n";
var_dump($integer == $string); // false
echo "Суворе порівняння\n";
var_dump($integer === $string); // false

echo "Порівняння integer і string з приведенням типів\n";
echo "Не суворе порівняння\n";
var_dump((string)$integer == $string); // false
echo "Суворе порівняння\n";
var_dump((string)$integer === $string); // false

echo "Порівняння integer і float\n";
echo "Не суворе порівняння\n";
var_dump($integer == $float); // true
echo "Суворе порівняння\n";
var_dump($integer === $float); // false

echo "Порівняння integer і float з приведенням типів\n";
echo "Не суворе порівняння\n";
var_dump((float)$integer == $float); // true
echo "Суворе порівняння\n";
var_dump((float)$integer === $float); // true

echo "Порівняння float і boolean\n";
echo "Не суворе порівняння\n";
var_dump($float == $boolean); // true
echo "Суворе порівняння\n";
var_dump($float === $boolean); // false

echo "Порівняння float і boolean з приведенням типів\n";
echo "Не суворе порівняння\n";
var_dump((bool)$float == $boolean); // true
echo "Суворе порівняння\n";
var_dump((bool)$float === $boolean); // true

echo "Порівняння null і string\n";
echo "Не суворе порівняння\n";
var_dump($null == $string); // true
echo "Суворе порівняння\n";
var_dump($null === $string); // false

echo "Порівняння null і string з приведенням типів\n";
echo "Не суворе порівняння\n";
var_dump((string)$null == $string); // true
echo "Суворе порівняння\n";
var_dump((string)$null === $string); // true

