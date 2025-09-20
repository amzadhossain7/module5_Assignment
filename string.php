<?php

$strings = ["Bangladesh 7", "Laravel", "PHP", "Assignment"];

function getDetails($strings){

    foreach ($strings as $string) {
        $upperWord = strtoupper($string);

        $words = str_split($string);

        $consonant = 0;

        for ($i = 0; $i < count($words); $i++) {
            $txt = strtolower($words[$i]);

            if (ctype_alpha($txt) && $txt !== "a" && $txt !== "e" && $txt !== "i" && $txt !== "o" && $txt !== "u") {
                $consonant++;
            }
        }


        echo "{$string}, Consonant Count: {$consonant}, Uppercase String: {$upperWord} \n";
    }
};

echo getDetails($strings);
