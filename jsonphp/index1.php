<?php

$phpArray = array("hạ long", "hà nội", "hồ chí minh");

class student {

    public $name;

    public $age;

    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$an = new student("nguyễn văn an",21,"hạ long");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($an);
echo "</pre>";

$phpJson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($an);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";
