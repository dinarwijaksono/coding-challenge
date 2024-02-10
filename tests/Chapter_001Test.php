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


    function test_reverseSeq()
    {
        $this->assertSame([5, 4, 3, 2, 1], Chapter_001::reverseSeq(5));
        $this->assertSame([3, 2, 1], Chapter_001::reverseSeq(3));
        $this->assertSame([1], Chapter_001::reverseSeq(1));
    }


    function test_hero()
    {
        $this->assertEquals(true, Chapter_001::hero(10, 5));
        $this->assertEquals(false, Chapter_001::hero(7, 4));
        $this->assertEquals(false, Chapter_001::hero(4, 5));
        $this->assertEquals(true, Chapter_001::hero(100, 40));
        $this->assertEquals(false, Chapter_001::hero(1500, 751));
        $this->assertEquals(false, Chapter_001::hero(0, 1));
    }
}
