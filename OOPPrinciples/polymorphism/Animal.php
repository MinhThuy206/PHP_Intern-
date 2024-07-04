<?php
class Animal{
    protected $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function quack()
    {
        echo "Speek";
    }

}
