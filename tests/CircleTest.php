<?php

include_once('src/Circle.php');

class CircleTest extends\PHPUnit_Framework_TestCase {

    private $radius = 50;

    public function testArea()
    {
        $circle = new Shapes\Circle($this->radius);
        $area = pi() * pow($this->radius, 2);

        $this->assertEquals($circle->area(), $area);
    }

    public function testPerimeter()
    {
        $circle = new Shapes\Circle($this->radius);
        $perimeter = 2 * pi() * $this->radius;

        $this->assertEquals($circle->perimeter(), $perimeter);
    }
}
