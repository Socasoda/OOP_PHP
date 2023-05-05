<?PHP
// class Person with two childs
class Person {
    public $name;
    public $age;
    public $gender;

    public function __construct($name,$age,$gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    // output all class preferences
    public function displayInfo() {
        return $infoString = "Name: ".$this->name.", Alter: ".$this->age.", Geschlecht: ".$this->gender;
    }
}

class Student extends Person {
    // Student get all preferences from Person already and here are two more
    public $studentID;
    public $course;

    // the constructor must have the attributes from the parent class and the new ones
    public function __construct($name,$age,$gender,$studentID,$course) {
       parent::__construct($name,$age,$gender); // takes the constructor code from Person
       $this->studentID = $studentID; // assign the additional attributes for Student constructor
       $this->course = $course;
    }
    // all preferences from parent class [ parent::displayInfo() ] concatted with the new ones
    //  as return value
    public function displayInfo() {
        return parent::displayInfo().", StudentID: ".$this->studentID.", Kurs: ".$this->course."";

    }
}
// same here
class Teacher extends Person {
    public $teacherID;
    public $subject;

    public function __construct($name,$age,$gender,$teacherID,$subject) {
        parent::__construct($name,$age,$gender);
        $this->teacherID = $teacherID;
        $this->subject = $subject;
     }
     public function displayInfo() {
        return parent::displayInfo().", LehrerID: ".$this->teacherID.", Kurs: ".$this->subject."";

    }
     
}
$otto = new Person('Otto',44,'m');
$peter = new Student('Peter',22,'m',003643,'Mathe');
$silke = new Teacher('Silke',56,'w',106,'English');

// output via displayInfo method for each class object
echo $otto->displayInfo();
echo "<br>";
echo $peter->displayInfo();
echo "<br>";
echo $silke->displayInfo();
?>

