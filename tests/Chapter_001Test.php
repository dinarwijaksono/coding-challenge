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


    function test_smash()
    {
        $this->assertSame('', Chapter_001::smash([]));
        $this->assertSame('hello', Chapter_001::smash(["hello"]));
        $this->assertSame('hello world', Chapter_001::smash(["hello", "world"]));
        $this->assertSame('halo dunia selamat bermain', Chapter_001::smash(['halo', 'dunia', 'selamat', 'bermain']));
    }


    function test_zeroFuel()
    {
        $this->assertSame(true, Chapter_001::zeroFuel(50, 25, 2));
        $this->assertSame(false, Chapter_001::zeroFuel(100, 50, 1));
    }


    function test_dnaToRna()
    {
        $this->assertSame('UUUU', Chapter_001::dnaToRna("TTTT"));
        $this->assertSame('GCAU', Chapter_001::dnaToRna("GCAT"));
        $this->assertSame("", Chapter_001::dnaToRna(""));
        $this->assertSame('U', Chapter_001::dnaToRna("T"));
        $this->assertSame('GACCGCCGCC', Chapter_001::dnaToRna("GACCGCCGCC"));
        $this->assertSame('GAUUCCACCGACUUCCCAAGUACCGGAAGCGCGACCAACUCGCACAGC', Chapter_001::dnaToRna("GATTCCACCGACTTCCCAAGTACCGGAAGCGCGACCAACTCGCACAGC"));
        $this->assertSame('CACGACAUACGGAGCAGCGCACGGUUAGUACAGCUGUCGGUGAACUCCAUGACA', Chapter_001::dnaToRna("CACGACATACGGAGCAGCGCACGGTTAGTACAGCTGTCGGTGAACTCCATGACA"));
        $this->assertSame('CACGACAUACGGAGCAGCGCACGGUUAGUACAGCUGUCGGUGAACUCCAUGACA', Chapter_001::dnaToRna("CACGACATACGGAGCAGCGCACGGTTAGTACAGCTGTCGGTGAACTCCATGACA"));
        $this->assertSame('AACCCUGUCCACCAGUAACGUAGGCCGACGGGAAAAAUAAACGAUCUGUCAAUG', Chapter_001::dnaToRna("AACCCTGTCCACCAGTAACGTAGGCCGACGGGAAAAATAAACGATCTGTCAATG"));
    }


    function test_countBy()
    {
        $this->assertSame([1, 2, 3, 4, 5], Chapter_001::countBy(1, 5), "Array does not match");
        $this->assertSame([2, 4, 6, 8, 10], Chapter_001::countBy(2, 5), "Array does not match");
    }

    function test_countSheep()
    {
        $this->assertSame('', Chapter_001::countsheep(0));
        $this->assertSame('1 sheep...', Chapter_001::countsheep(1));
        $this->assertSame('1 sheep...2 sheep...', Chapter_001::countsheep(2));
        $this->assertSame('1 sheep...2 sheep...3 sheep...', Chapter_001::countsheep(3));
    }
}
