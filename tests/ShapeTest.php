<?php

include_once('src/Square.php');
include_once('src/Circle.php');
include_once('src/Cube.php');
include_once('src/Sphere.php');

class ShapeTest extends\PHPUnit_Framework_TestCase {

    public function testInstanceOfShape()
    {
       $this->assertInstanceOf('Shapes\Square', new \Shapes\Square(25));
       $this->assertInstanceOf('Shapes\Circle', new \Shapes\Circle(25));
       $this->assertInstanceOf('Shapes\Cube', new \Shapes\Cube(25));
       $this->assertInstanceOf('Shapes\Sphere', new \Shapes\Sphere(25));
    }

    public function test3DShapes()
    {
        $this->assertTrue(method_exists(new Shapes\Square(25), 'volume'), 'Square is not a 3D shape');
        $this->assertTrue(method_exists(new Shapes\Circle(25), 'volume'), 'Circle is not a 3D shape');
        $this->assertTrue(method_exists(new Shapes\Cube(25), 'volume'), 'Cube is not a 3D shape');
        $this->assertTrue(method_exists(new Shapes\Sphere(25), 'volume'), 'Sphere is not a 3D shape');
    }
}
