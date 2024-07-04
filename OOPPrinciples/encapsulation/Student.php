<?php
class Student{
    private $name;
    private $msv;

    /**
     * @param $name
     * @param $msv
     */
    public function __construct($name, $msv)
    {
        $this->name = $name;
        $this->msv = $msv;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMsv()
    {
        return $this->msv;
    }

    /**
     * @param mixed $msv
     */
    public function setMsv($msv)
    {
        $this->msv = $msv;
    }
}

$student = new Student("Thuy", 20001979);
echo "Name: ".$student->getName()."\n";
echo "MSV: ".$student->getMsv();