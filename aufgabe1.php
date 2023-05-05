<?PHP
// a simple class with constructor and 3 properties 
class Bicycle {
    
    // properties
    public $manufacturer;
    public $model;
    public $year;

    // constructor

    public function __construct($manufacturer, $model, $year) {

        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;

    }


}

// instance of Bicycle object
$bike = new Bicycle('Kalkhoff','Image 3.B Move Wabe',2022);

// access to the properties of bike object with arrow and output via echo
echo "Firma: $bike->manufacturer, Modell: $bike->model, Erscheinungsjahr: $bike->year";
