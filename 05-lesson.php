<?php 

class Person {
    public $name;
    public $job;

    public function __construct($name, $job) {
        $this->name = $name;
        $this->job = $job;
    }

    public function introduce() {
        return "نام و نام خانوادگی: $this->name, شغل: $this->job";
    }
}

$person1 = new Person("مهدی بیات", "برنامه نویس");

echo $person1->introduce();