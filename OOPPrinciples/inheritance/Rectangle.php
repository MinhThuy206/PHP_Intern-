<?php
class Rectangle{
    protected $height;

    protected $width;

    /**
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

}

?>