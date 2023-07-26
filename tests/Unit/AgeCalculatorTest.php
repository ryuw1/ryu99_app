<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use Infrastructure\AgeCalculator;
use DateTime;
use Mockery\Generator\Method;

class AgeCalculatorTest extends TestCase 
{
    public function testCalculateAge() {
        // テストダブルを作成
        $ageCalculatorMock = $this->createMock(AgeCalculator::class);

        // メソッドの振る舞いを定義
        $today = new DateTime('2023-07-26');
        $birthdate = new DateTime('2000-01-01');
        $ageCalculatorMock->method('calculateAge')
                         ->willReturn(23);

        // メソッドを呼び出し、結果を検証
        $this->assertEquals(23, $ageCalculatorMock->calculateAge($today, $birthdate));
    }
}