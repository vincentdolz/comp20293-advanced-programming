<?php
require_once __DIR__ . '/../src/DolzFinals2.php';

class DolzFinals2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new DolzFinals2();
        $simple2->setName('Ezio');
        $this->assertEquals($simple2->getName(), 'Ezio');
    }

    public function testGetAge()
    {
        $simple2 = new DolzFinals2();
        $simple2->setAge(21);
        $this->assertEquals($simple2->getAge(), 21);
    }

    public function testFaveColor()
    {
        $simple2 = new DolzFinals2();
        $simple2->setFaveColor('Black');
        $this->assertEquals($simple2->getFaveColor(), 'Black');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new DolzFinals2();
        $simple2 ->setName('Ezio');
        $this->assertIsString($simple2->getName(), 'Ezio');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new DolzFinals2();
        $simple2->setAge(21);
        $this->assertIsInt($simple2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new DolzFinals2();
        $simple2->setAge(21);
        $this->assertIsNumeric($simple2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new DolzFinals2();
        $simple2->setFaveColor('Black');
        $this->assertIsString($simple2->getFaveColor(), 'Black');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new DolzFinals2();
        $simple2->setTogetherInput('Ezio', 21, 'Black');
        $this->assertEquals($simple2->getTogetherInput(), 'Ezio', 21, 'Black');
    }

}