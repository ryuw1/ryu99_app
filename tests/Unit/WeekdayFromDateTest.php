<?php
use PHPUnit\Framework\TestCase;

//読み込めないのでテスト対象とテストファイルを同居
function Youbi($hi){
    $youbiArray = array("(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)");
    $youbiIndex = date("w", strtotime($hi));
    return $youbiArray[$youbiIndex];
}

class YoubiTest extends TestCase
{
    public function testYoubi()
    {
        $this->assertEquals("(日)", Youbi("2023-07-23"));
        $this->assertEquals("(月)", Youbi("2023-07-24"));
        $this->assertEquals("(火)", Youbi("2023-07-25"));
        $this->assertEquals("(水)", Youbi("2023-07-26"));
        $this->assertEquals("(木)", Youbi("2023-07-27"));
        $this->assertEquals("(金)", Youbi("2023-07-28"));
        $this->assertEquals("(土)", Youbi("2023-07-29"));
    }
}