<?php
ini_set('display errors ',1)
ini_set('display_startup_errors',1)
error_reporting(E_All )

class Person{
public string $name;
private int $age;
protected string $message;

public function __construct($name){//first run when class is called
    $this ->name = $name;
};
public function getter(){
    return $this ->name;
};
public function __destruct(){
    echo "{$this ->name}-Destruct";
};
};
$Person = new Person("Nimrod");
echo $person -> getter();
//inhertance
class Student extends Person {
    public string $adm;
    public function __construct($name, adm){
            $this -> adm =$adm ;
            parent :: __construct($name);

    }
$student =new Student ("Njuguna", "csc/040/2020");
echo $student -> getter();

}

?>