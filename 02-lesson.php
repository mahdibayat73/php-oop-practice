<?php

// 📝 تمرین روز اول:
// ۱. کلاس Book بساز که دو ویژگی داشته باشه: title و author
// ۲. یه شی جدید از این کلاس بساز (مثلاً کتاب "شازده کوچولو" نوشته "آنتوان دو سنت‌اگزوپری")
// ۳. با echo عنوان و نویسنده‌اش رو چاپ کن

class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function book_info() {
        echo "عنوان کتاب: $this->title , نویسنده کتاب: $this->author";
    }
}

$book1 = new Book("شازده کوچولو", "آنتوان دو سنت‌اگزوپری");
$book1->book_info();