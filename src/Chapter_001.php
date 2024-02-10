<?php

namespace dinarwijaksono11\src;

class Chapter_001
{

    // 1 - Beginner Reduce but Grow
    public static function grow($a): int
    {
        $result = $a[0];

        for ($i = 1; $i < count($a); $i++) {
            $result *= $a[$i];
        }

        return $result;
    }

    // 2 - 
    // https://www.codewars.com/kata/5a00e05cc374cb34d100000d
    public static function reverseSeq(int $n): array
    {
        $result = [];

        for ($i = $n; $i > 0; $i--) {
            $result[] = $i;
        }

        return $result;
    }


    // 3
    // https://www.codewars.com/kata/59ca8246d751df55cc00014c
    public static function hero(int $bullets, int $dragons): bool
    {
        return $bullets >= $dragons * 2;
    }


    // 4 - Sentence Smash
    // https://www.codewars.com/kata/53dc23c68a0c93699800041d
    public static function smash(array $words): string
    {
        $result = '';
        for ($i = 0; $i < count($words); $i++) {
            $result .= $words[$i] . " ";
        }

        return trim($result);
    }


    // 5 - Will you make it?
    // https://www.codewars.com/kata/5861d28f124b35723e00005e
    public static function zeroFuel($distanceToPump, $mpg, $fuelLeft)
    {
        return $distanceToPump <= $mpg * $fuelLeft;
    }


    // 6 - DNA to RNA Conversion
    // https://www.codewars.com/kata/5556282156230d0e5e000089
    public static function dnaToRna($str)
    {
        $result = '';
        $array = str_split($str);

        for ($i = 0; $i < count($array); $i++) {
            $array[$i] == "T" ? $result .= "U" : $result .= $array[$i];
        }

        return $result;
    }
}
