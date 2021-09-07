<?php

interface classification {
    public function className();
    public function subClass();
}


interface physicalParameters {
    public function limbs();
    public function covering();
}

abstract class Animals implements classification{
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function className() {
        echo $this->getName().", относится к классу животных";
    }
}

abstract class Marsupials extends Animals {
    public function subClass() {
        echo ", подклас сумчатые";
    }
}


abstract class Mammals extends Animals {
    // public function __construct($name) {
    //     parent:: __construct($name);
    // }
    public function subClass() {
        echo ", подклас млекопитающие";
    }
}

class Tigers extends Mammals implements physicalParameters {
    // public function __construct($name) {
    //     parent:: __construct($name);
    // }
    public function limbs() {
        echo ", имеет 4 конечности, при перемещении использу все 4 конечности";
    }
    public function covering() {
        echo ", покрыт шерстью.";
    }
}

class Kangaroo extends Marsupials {
    public function limbs() {
        echo ", имеет 4 конечности, двигается на 2 конечностях";
    }
    public function covering() {
        echo ", покрыт шерстью.";
    }

}

$tiger = new Tigers('Тигр');
$tiger->className();
$tiger->limbs();
$tiger->subClass();
$tiger->covering();

echo '<br>';

$kangaroo = new Kangaroo("Кенгуру");
$kangaroo->className();
$kangaroo->limbs();
$kangaroo->subClass();
$kangaroo->covering();



?>