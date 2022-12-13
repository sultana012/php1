<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// php comment
echo "Hello World!<br>";
echo "This is second line<br>";
/*
multiline comment
*/
#variable 
$color = "Sultana <br>";
echo $color;
$txt = "text";
echo "This is $txt <br>";

#variable concat
$txt2 = "This is text two,<br>";
echo "This is text one,<br>" .$txt2 ."This is text three <br>";

// variable summition
$a = 5;
$b = 10;
echo $a + $b ."<br>";

// array
$cars = array("BMW","VOLVO","TOYOTA");
var_dump($cars);

// class
class car {
    public $model = "MARCEDES BENSE";
    public $color = "BLACK";

    public function getCarInformation(){
        return "model : " . $this->model ." color : ". $this->color;
    }
}
$car1 = new car();
echo $car1->getCarInformation();
?>


</body>
</html>