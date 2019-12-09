<?php


$userInput = "the quick brown fox";

$userInputlowerCase = strtolower($userInput);
$source = explode(' ', $userInputlowerCase);

$sourceArray = [];

foreach ($source as $word) {
    $splitWord = str_split($word);
    array_push($sourceArray, $splitWord);
 }

$morsecodearray = [
    "a" =>	'.-',
    "b" =>  '-...',
    "c" =>	'-.-.',
    "d"	=>  '-..',
    "e" =>	'.',
    "f"	=>  '..-.',
    "g" =>	'--.',
    "h"	=>  '....',
    "i"	=>  '..',
    "j" =>	'.---',
    "k"	=>  '-.-',
    "l" =>	'.-..',
    "m" =>	'--' ,
    "n" =>	'-.',
    "o" =>	'---',
    "p" =>	'.--.',
    "q" =>	'--.-',
    "r" =>	'.-.',
    "s" =>	'...',
    "t" =>	'-',
    "u" =>	'..-',
    "v" =>	'...-',
    "w" =>	'.--',
    "x" =>	'-..-',
    "y" =>	'-.--',
    "z" =>	'--..',
    "0" =>	'-----',
    "1" =>	'.----',
    "2" =>	'..---',
    "3" =>	'...--',
    "4" =>	'....-',
    "5" =>	'.....',
    "6" =>	'-....',
    "7" =>	'--...',
    "8" =>	'---..',
    "9" =>	'----.',
    "&" =>	'.-...',
    "'" =>	'.----.',
    "@" =>	'.--.-.',
    ")" =>	'-.--.-',
    "(" =>	'-.--.',
    ":" =>	'---...',
    "," =>	'--..--',
    "=" =>	'-...-',
    "!" =>	'-.-.--',
    "." =>  '.-.-.-',
    "-" =>  '-....-',
    "+" =>  '.-.-.',
    "?" =>	'..--..',
    "/" =>	'-..-.',
    ];

    foreach ($sourceArray as $word) {
        foreach($word as $character) {
            foreach ($morsecodearray as $letter => $morse) {
                if ($letter === $character) {
                    echo $morse. ' ';
            }
        } 
    }
}

?>

