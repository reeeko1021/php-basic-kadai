<?php
// Food クラス
class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . "\n";
    }
}

// Animal クラス
class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height . "\n";
    }
}

// オブジェクト作成
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// オブジェクトの中身を出力
var_dump($food);
var_dump($animal);

// メソッドの結果を出力
$food->show_price();
$animal->show_height();
?>
