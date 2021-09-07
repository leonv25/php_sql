<?php 

class Human {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function say() {
        echo "меня зовут ".$this->name." и ";
    }
}

class Man extends Human {
    public function beard() {
        echo "у меня растет борода";
    }
}

class Woman extends Human {
    public function bearCildren() {
        echo "я рожаю детей";
    }
}

$man = new Man('user_name');
$man->say();
$man->beard();

echo '<br>';

$woman = new Woman('woman_name');
$woman->say();
$woman->bearCildren();

?>