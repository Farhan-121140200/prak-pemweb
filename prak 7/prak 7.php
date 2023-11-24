<?php
// Farhan Rizky Gunawan
// 121140200
// prak pemweb RB
class Person {
    // Properties
    public $name;
    public $age;
    public $address;

    // Constructor
    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // mendapatkan data diri
    public function getInfo() {
        return "Name: {$this->name}, Age: {$this->age}, Address: {$this->address}";
    }
}

// membuat objek 
$person1 = new Person("budi", 30, "bandar lampung");

// mengakses dan menampilkan data diri
echo $person1->getInfo();
?>
