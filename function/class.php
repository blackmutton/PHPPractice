<?php
class Animal{
    public $name ='animal';
    protected $age=12;
    private $weight=20;

    public function _contruct($name){
        $this->name=$name;
    }

    public function run(){
        echo $this->name;
        echo " is running";
    }
    private function speed(){
        return 'high speed';
    }
}

class Cat extends Animal{
    public $name ='cat';

    public function run(){
        echo "cat is running";
        echo $this ->speed();
        echo $this->age;
    }

    private function speed(){
        return ' low speed';
    }
}


$dog=new Animal("tom");
$dog->run();
echo "<br>";
$cat = new Cat();
echo $cat->name;
echo "<br>";
echo $cat->run();
echo "<br>"; 
// echo $cat->speed();
echo "<br>";
// echo $cat->weight;
echo "<br>";
$ani=new Animal('john');
$ani->run();
?>