<?php

echo "Hello, World!<br>";

//Escape Sequences
echo "1. HTML.";
echo "<br>2. PHP.";
echo "<br>3. CSS for \"styling\".";

//String Concatenation
echo "<br>My name is:" . " Adriana";

//Variables
$my_1_variable = "Variable";
$biography = "I am 19.";
$favorite_food = "<br>" . "tur" . "duck" . "en";
echo "<br>I am a student and " . $biography . "<br>";

//Variable Parsing
$noun = "place";
$adjective = "good";
$verb = "liv";
echo "I have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.<br>";

//Variable Reassignment
$movie = "Batman";
$old_favorite = $movie;

echo "I'm a fickle person, my favorite movie used to be $movie.<br>";

$movie = "Pride and Prejudice";

echo "\nBut now my favorite is $movie.<br>";
echo "\nBut i still love $old_favorite.<br>";

//Concatenating Assignment Operator
echo "I'm going on a picnic!";

$sentence = "<br>I'm going on a picnic, and I'm taking apples";
echo $sentence;
$sentence .= ", bread";
echo $sentence . "<br>";

//Assign by Reference
$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;
$order .= ", 1 cheeseburger";

echo "Your order is: $very_bad_unclear_name.<br>";

//Приведение типа
//неявное
$sum = "20" + 5;
echo $sum . "<br>";
//явное
$num = (int)"250";
echo gettype($num) . "<br>";

//Переменные переменных
$song ="Lose yourself";
$$song = "River";
echo "$song" . " " . "${$song}" . "<br>";

//Сравнение
var_dump(0 == FALSE);

//Arrays
$first_array = array("first", 2 , "third",
    4 , "fifth");
echo "<br>" . count($first_array) . "<br>";

//Implode()
$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
$favorite_nums = [7, 201, 33, 88, 91];

echo implode("!", $message);
echo "<br>";
print_r($favorite_nums);

//Push, pop,shift,unshift
$stack = ["wild success", "failure", "struggle"];
$num_added = array_push($stack, "blocker", "impediment");
array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);

$record_holders = [];
array_unshift($record_holders, "Tim Montgomery","Maurice Greene","Donovan Bailey","Leroy Burrell","Carl Lewis");
array_shift($record_holders);
array_unshift($record_holders,"Justin Gatlin","Asafa Powell");
array_shift($record_holders);
array_unshift($record_holders, "Usain Bolt");
echo "<br>" . implode(",", $record_holders) . "<br>";

//Explode()
$languages = "HTML CSS JavaScript PHP Java";
$language = explode(" ", $languages);
echo implode("<br>", $language);

//FOREACH()
$num = [2,5,10,15,0,3];
foreach($num as &$value) {
    $value = $value * 2;
}
echo "<br>" . implode(", ", $num);

//Hash maps or Associative Arrays
$php_array = array(
    "language" => "PHP",
    "creator" => "Rasmus Lerdorf",
    "year_created" => 1995,
    "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
);
$php_short = ["language" => "PHP","creator" => "Rasmus Lerdorf","year_created" => 1995,"filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]];
echo "<br>" . implode(", ", $php_array) . "<br>";
print_r($php_short);
$my_car = [
    "oil" => "black and clumpy",
    "brakes" => "new",
    "tires" => "old with worn treads",
    "filth" => "bird droppings",
    "wiper fluid" => "full",
    "headlights" => "bright"
];
echo "<br>";
print_r($my_car);
echo "<br>";
$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";
unset($my_car["filth"]);
print_r($my_car);

$hybrid_array = [5 , "five", 4 , 7];
$hybrid_array[8] = "five more";
echo "<br>";
print_r($hybrid_array);
array_push($hybrid_array, rand());
echo "<br>";
echo $hybrid_array[9];

$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];
$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];
$potluck = $giraffe_foods + $impala_foods;
echo "<br>";
print_r($potluck);

//CLASS
class Beverage {
    public $color,$opacity,$temperature;
    function __construct($temperature,$color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }
    function __destruct()
    {
        print "<br>" . "Destructing " . __CLASS__ . "<br>";
    }

    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
    function setColor($color) {
        $this->color = strtolower($color);
    }
    function getColor() {
        return $this->color;
    }
}
class Milk extends Beverage {
    function __construct(){
        parent::__construct("cold","red");
    }
    function getInfo()
    {
        return parent::getInfo() . "I like my milk this way.";
    }
}

$tea = new Beverage("mild","violet");
echo "<br>";
echo $tea->temperature . " " . $tea->color ;
$soda = new Beverage("cold","black");
echo "<br>";
echo $soda->getInfo();
$s = new Beverage("cold","white");
echo "<br>";
echo $s->getInfo();
echo "<br>";
$inst = new Milk();
echo $inst->getInfo();

//SINGLETON
class Singleton {
    private static $instance = null;

    public static function getInstance()
    {
        if(null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {} // ограничивает клонирование объекта
    private function __construct() {} //приватный конструктор ограничивает реализацию getInstance ()

    public function test()
    {
        var_dump($this);
    }
}
$Object = Singleton::getInstance();// Получение объекта

//Вывод будет одинаковым, так как существует только один экземпляр
echo "<br>";
$Object->test();
echo "<br>";
Singleton::getInstance()->test();

// Попытка создать дополнительный экземпляр приведет к ошибке
$Object2 = new Singleton(); // Fatal error: Call to private Singleton::__construct() from invalid context
$Object3 = clone $Object; // Fatal error: Call to private Singleton::__clone() from context ''
?>