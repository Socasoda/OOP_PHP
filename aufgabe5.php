<?PHP
// a class with childs to see how polymorphism works in PHP

// In other language i would call this a prototype class
// no references but functions without logic inside
class Shape {
    public function getArea():float {}
}

// class Rectangle as a spizialized version of Shape
class Rectangle extends Shape {

    public float $width;
    public float $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea():float {
        return $this->width * $this->height;
    }
}
// take a look at the different implementation of the getArea function

class Circle extends Shape {
    public float $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function getArea():float {
        return pi()*pow($this->radius,2);
    }
}


$rectangle = new Rectangle(10,5);
$circle = new Circle(4);

// same method name to use but different return values and caculation of them
echo "Fläche des Rechtecks: ".$rectangle->getArea()." cm²";
echo "<br>";
echo "Fläche des Kreises: ".$circle->getArea()." cm²";

?>
