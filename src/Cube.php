<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Cube implements ShapeInterface {

    protected $side;

    /**
     * Square constructor.
     *
     * @param int $side
     */
    public function __construct($side)
    {
        $this->side = $side;
    }

    /**
     * Get the area
     *
     * @return int
     */
    public function area()
    {
        // i changed sqrt() to pow(), based on this formula its x to the power of 2.
        // x is multiplied by itself. i.e. x * x
        // reference: http://math2.org/math/geometry/areasvols.htm
        return 6 * pow($this->side, 2);
    }

    /**
     * Get the perimeter
     *
     * @return int
     */
    public function perimeter()
    {
        return 12 * $this->side;
    }

    /**
     * Get the volume
     *
     * @return int
     */
    public function volume()
    {
        return pow($this->side, 3);
    }
}
