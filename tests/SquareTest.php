<?php

include_once('src/Square.php');

class SquareTest extends\PHPUnit_Framework_TestCase {

    private $side = 25;

    public function testArea()
    {
        $square = new Shapes\Square($this->side);
        $area = pow($this->side, 2);

        $this->assertEquals($square->area(), $area);
    }

    public function testPerimeter()
    {
        $square = new Shapes\Square($this->side);
        $perimeter = 4 * $this->side;

        $this->assertEquals($square->perimeter(), $perimeter);
    }
}
