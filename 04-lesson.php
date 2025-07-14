<?php 

class Movie {
    public $title;
    public $director;

    public function __construct($title, $director) {
        $this->title = $title;
        $this->director = $director;
    }

    public function getInfo() {
        return " فلیم: $this->title - کارگردان: $this->director ";
    }
}

$movie1 = new Movie("اصغر فرهادی", "جدایی نادر از سیمین");

echo $movie1->getInfo();