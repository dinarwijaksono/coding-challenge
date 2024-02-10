<?php

use dinarwijaksono11\src\Chapter_001;
use PHPUnit\Framework\TestCase;

require_once "./vendor/autoload.php";

class Chapter_001Test extends TestCase
{
    function test_grow()
    {
        $this->assertEquals(6, Chapter_001::grow([1, 2, 3]));
        $this->assertEquals(16, Chapter_001::grow([4, 1, 1, 1, 4]));
        $this->assertEquals(64, Chapter_001::grow([2, 2, 2, 2, 2, 2]));
    }
}
