<?php

class product{
    public $name;
    public static $price;
    public static $discount;

    public function __construct($name,$price,$discount){
        $this->name = $name;
        self::$price = $price;
        self::$discount = $discount;
    }

    public function getPrice(){
        echo "",self::$price;
    }

    public function getName(){
        echo "Name : ", $this->name;
    }

    public static function setPrice($newPrice){
        self::$price = $newPrice;
    }

    public function getDiscount(){
        echo "Diskon : Rp.", self::$discount;
    }

    public static function setDiscount($newDiscount){
        self::$discount = $newDiscount;
    }
}

class CDMusic extends product{
    public $artist;
    public $genre;

    public function __construct($artist,$genre){
        $this->artist = $artist;
        $this->genre = $genre;
        parent::$price = parent::$price + (parent::$price*0.1);
        parent::$discount += parent::$discount * 0.05;
    }

    public function getArtist(){
        echo "Artist : ", $this->artist;
    }

    public function setArtist($newArtist){
        $this->artist = $newArtist;
    }

    public function getGenre(){
        echo "Genre : ", $this->genre;
    }

    public function setGenre($newGenre){
        $this->genre = $newGenre;
    }
}

class CDRack extends product{
    public $capacity;
    public $model;

    public function __construct($capacity,$model){
        $this->$capacity = $capacity;
        $this->model = $model;
        parent::$price += parent::$price*0.15;
    }

    public function getCapacity(){
        echo "Capacity : ", $this->capacity;
    }

    public function setCapacity($newCapacity){
        $this->capacity = $newCapacity;
    }

    public function getModel(){
        echo "Model: ", $this->model;
    }

    public function setModel($newModel){
        $this->model = $newModel;
    }
}

$product = new product("Time For The Moon Night",330000,100000);
echo"Detail Product <br>";
echo "<br> ".$product->getName();
echo "Price dari class product : Rp.";
echo "<br> ".$product->getPrice();
echo "Diskon dari class product : ";
echo "<br> ".$product->getDiscount();

echo "<br>";
$cdbaru1= new CDMusic("G-Friend", "Pop and R&B"); 
echo "<br> ".$cdbaru1->getArtist(); 
echo "<br> ".$cdbaru1->getGenre(); 
echo "Price dari class CDMusic : Rp.";
echo "<br> ".$cdbaru1->getPrice(); 
echo "Diskon dari class CDMusic : ";
echo "<br> ".$cdbaru1->getDiscount();

echo "<br>";
$cdbaru2 = new CDRack(300, "compact"); 
echo "<br> ".$cdbaru2->getCapacity();
echo "<br> ".$cdbaru2->getModel(); 
echo "Price dari class CDRack : Rp.";
echo "<br> ".$cdbaru2->getPrice(); 
?>