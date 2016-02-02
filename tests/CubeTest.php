<?php

include_once('src/Cube.php');

class SquareTest extends\PHPUnit_Framework_TestCase {

    private $side = 25;

    public function testArea()
    {
        $cube = new Shapes\Cube($this->side);
        $area = 6 * pow($this->side, 2);

        $this->assertEquals($cube->area(), $area);
    }

    public function testPerimeter()
    {
        $cube = new Shapes\Cube($this->side);
        $perimeter = 12 * $this->side;

        $this->assertEquals($cube->perimeter(), $perimeter);
    }

    public function testVolume()
    {
        $cube = new Shapes\Cube($this->side);
        $volume = pow($this->side, 3);

        $this->assertEquals($cube->volume(), $volume);
    }
}
