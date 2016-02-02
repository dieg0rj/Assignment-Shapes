<?php

include_once('src/Sphere.php');

class SphereTest extends\PHPUnit_Framework_TestCase {

    private $radius = 50;

    public function testArea()
    {
        $sphere = new Shapes\Sphere($this->radius);
        $area = 4 * pi() * pow($this->radius, 2);

        $this->assertEquals($sphere->area(), $area);
    }

    public function testPerimeter()
    {
        $sphere = new Shapes\Sphere($this->radius);
        $perimeter = 2 * pi() * $this->radius;

        $this->assertEquals($sphere->perimeter(), $perimeter);
    }

    public function testVolume()
    {
        $sphere = new Shapes\Sphere($this->radius);
        $volume = (4 * (pi() * pow($this->radius, 3))) / 3;

        $this->assertEquals($sphere->volume(), $volume);
    }
}
