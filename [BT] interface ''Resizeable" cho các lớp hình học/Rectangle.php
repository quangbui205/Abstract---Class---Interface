<?php
include_once ("Resizeable.php");
include_once("Shape.php");
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getName()
    {
        return "Rectangle";
    }
    public function getArea()
    {
        return $this->height*$this->width;
    }
    public function setResize()
    {
        $this->width= rand(1,100);
        $this->height=rand(1,100);
    }
}