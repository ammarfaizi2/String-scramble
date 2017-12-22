<?php
// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class Test extends PHPUnit\Framework\TestCase
{
    // test function names should start with "test"
    public function testBasic() {
      $this->assertEquals(scramble('abcd',[0,3,1,2]), 'acdb');
      $this->assertEquals(scramble('sc301s', [4,0,3,1,5,2]), "c0s3s1", "Should return c0s3s1");
      $this->assertEquals(scramble('bskl5', [2,1,4,3,0]), "5sblk", "Should return 5sblk");
    }
    
}