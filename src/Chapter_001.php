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
}
