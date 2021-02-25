<?php 

class Zero {
    private array $properties = [];

    // public string $firstName = "Kiwiii";

    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        return $this->properties[$name];
    }

    public function __set($name, $value) {
        // echo "Set property name $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
        // echo "Isset $name";
        // return false;
    }

    public function __unset($name)
    {
        // echo "unset $name";
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Ekokoko";
$zero->middleName = "Midel";
$zero->lastName = "Lastnyah";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "First Name : $zero->middleName" . PHP_EOL;
echo "First Name : $zero->lastName" . PHP_EOL;
// unset($zero->firstName);
// $zero->firstName = "Eki";
// echo $zero->firstName . PHP_EOL;
// echo $zero->middleName . PHP_EOL;

$zero->sayHello("Bebeng", " Lulu");
Zero::sayHelli("bebeng", " lulu");