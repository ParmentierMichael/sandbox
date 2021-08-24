<?php

use PHPUnit\Framework\TestCase;

class Example_Test extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->assertEquals(true,true);
    }
    
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample2()
    {
        $this->assertEquals(true,true);
        $this->assertEquals(false, false);
    }
    
}
