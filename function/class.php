<?php
// 物件藍圖
class Animal{
    public $name ='animal';
    // public $name;
    // protected能被繼承，但無法被存取
    protected $age=12;
    // private只能在此藍圖中存取，也無法被繼承
    private $weight=20;

    public function __construct($name='animal'){
        // 將原本繼承public的$name指定為括號中的$name
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

// 讓cat繼承animal
class Cat extends Animal{
    public $name ='cat';

    public function run(){
        echo "cat is running";
        // 讓cat存取animal中的protected
        echo $this ->speed();
        // 先在public中呼叫private，讓外部能存取
        echo $this->age;
    }

    private function speed(){
        return ' low speed';
    }
}

// 因為animal中已有$name
$dog=new Animal("tom");
$dog->run();
echo "<br>";
$cat = new Cat();
echo $cat->name;
echo "<br>";
echo $cat->run();
echo "<br>"; 
// 這是protected所以印不出來
// echo $cat->speed();
echo "<br>";
// echo $cat->weight;
echo "<br>";
$ani=new Animal('john');
$ani->run();
?>