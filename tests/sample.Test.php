<?
require_once 'vendor/autoload.php';

class sampleTest extends PHPUnit_Framework_TestCase
{
    public function testSample()
    {
      
        //Mockを設定
        $m = \Mockery::mock('Sample');
        $m = showIdReceive('Hello')
            ->with('foo')
            ->andReturn("Hello foo");

        //Mockを実行
        $m->Hello('foo');

        $this->assertEquals("Hello foo", $m->Hello('foo'));
    }
}
`