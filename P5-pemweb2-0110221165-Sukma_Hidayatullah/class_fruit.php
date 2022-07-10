<?php
class Fruit
{
    public $name;
    public $color;
    public $weight;

    // function set_name($n)
    // {
    //     $this->name = $n;
    // }

    // protected function set_color($n)
    // {
    //     $this->color = $n;
    // }

    // private function set_weight($n)
    // {
    //     $this->weight = $n;
    // }

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is $this->name and the color is $this->color";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry";
    }
}

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
echo "<br>";
$strawberry->intro();

// $mango = new Fruit();
// $mango->name = 'Mango';
// $mango->color = 'Yellow';
// $mango->weight = '300';

// $mango = new Fruit();
// $mango->set_name('Mango');
// $mango->set_color('Yellow');
// $mango->set_weight('300');
