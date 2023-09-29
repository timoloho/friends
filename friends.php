<?php

$friends = ['evert', 'kapa', 'kristjan', 'kristo', 'nauka', 'gen'];

$shorterNames = array_filter($friends, function ($name) {
    return strlen($name) < 5;
});

$longerNames = array_filter($friends, function($name) {
    return strlen($name) >= 5;
});

$uppercaseNames = array_map(function ($name) {
    return strtoupper($name);
}, $friends);

echo "Shorter Names: ";
print_r($shorterNames);

echo "Longer Names: ";
print_r($longerNames);

echo "Names in CAPS: ";
print_r($uppercaseNames);