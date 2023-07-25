<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use adJapaneseCalenderCompatibility;
class adJpCalenderCompatibilityTest extends TestCase
{
    public function testAdForJp()
    {
        $calender = new adJapaneseCalenderCompatibility();

        // 令和のテスト
        $this->assertEquals('令和3年05月01日', $calender->adForJp('2023-05-01', '1'));
        $this->assertEquals('R 3 - 05 - 01', $calender->adForJp('2023-05-01', '2'));

        // 平成のテスト
        $this->assertEquals('平成31年01月07日', $calender->adForJp('2019-01-07', '1'));
        $this->assertEquals('H 31 - 01 - 07', $calender->adForJp('2019-01-07', '2'));

        // 昭和のテスト
        $this->assertEquals('昭和64年01月07日', $calender->adForJp('1989-01-07', '1'));
        $this->assertEquals('S 64 - 01 - 07', $calender->adForJp('1989-01-07', '2'));

        // 大正のテスト
        $this->assertEquals('大正15年12月24日', $calender->adForJp('1926-12-24', '1'));
        $this->assertEquals('T 15 - 12 - 24', $calender->adForJp('1926-12-24', '2'));

        // 明治のテスト
        $this->assertEquals('明治45年07月29日', $calender->adForJp('1912-07-29', '1'));
        $this->assertEquals('M 45 - 07 - 29', $calender->adForJp('1912-07-29', '2'));

        // 明治以前の日付に対するテスト
        $this->assertFalse($calender->adForJp('1867-07-29', '1'));
    }
}
