<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Sphere implements ShapeInterface {

    protected $radius;

    /**
     * Circle constructor.
     *
     * @param int $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Get the area
     *
     * @return int
     */
    public function area()
    {
        // i changed sqrt() to pow(), based on this formula its r to the power of 2.
        // r is multiplied by itself. i.e. r * r
        // reference: http://math2.org/math/geometry/areasvols.htm
        return 4 * pi() * pow($this->radius, 2);
    }

    /**
     * Get the perimeter
     * NOTE: For a circle/sphere this is also known as circumference
     *
     * @return int
     */
    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }

    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return (4 * (pi() * pow($this->radius, 3))) / 3;
    }
}
