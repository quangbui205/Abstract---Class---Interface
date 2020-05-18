<?php
include_once ("Shape.php");
include_once ("Resizeable.php");
class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setResize()
    {
        $this ->radius= rand(1,100);
    }

    public function getName()
    {
        return "Circle";
    }

    public function getArea()
    {
        return pi*pow($this->radius,2);
    }
}