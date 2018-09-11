<?php

function response()
{
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            postResponse();
            break;
        case 'GET':
        default:
            getResponse();
            break;
    }
}

function getResponse()
{
    echo 'Skriv in en fras du vill ha på rövarspråket.';
}

function postResponse()
{
    $consonants = [
        'b', 'c', 'd', 'f', 'g',
        'h', 'j', 'k', 'l', 'm',
        'n', 'p', 'q', 'r', 's',
        't', 'v', 'w', 'x', 'z',
    ];
    $lastConsonantIndex = count($consonants) - 1;

    $formMessage = $_POST['message'];
    $formMessageAsArray = str_split($formMessage);

    $result = '';

    foreach ($formMessageAsArray as $character) {
        $matchesConsonant = false;

        foreach ($consonants as $consonant) {
            if ($character === $consonant) {
                $matchesConsonant = true;
            }
        }

        if ($matchesConsonant === true) {
            $result .= $character . 'o' . $character;
        } else {
            $result .= $character;
        }
    }

    echo $result;
}
