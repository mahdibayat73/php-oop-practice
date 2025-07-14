<?php 

// 🧃 مثال واقعی‌تر برای درس اول: کلاس «نوشیدنی» (Drink)
// فرض کن می‌خوای برنامه‌ای بنویسی که درباره نوشیدنی‌ها اطلاعات ذخیره کنه. هر نوشیدنی می‌تونه:

// یک نام داشته باشه (مثلاً «لیموناد»)

// یک دمای سرو (مثلاً «سرد» یا «گرم»)

class Drink {
    public $name;
    public $temperature;

    public function __construct($name, $temperature) {
        $this->name = $name;
        $this->temperature = $temperature;
    }

    public function describe() {
        echo "نوشیدنی: $this->name | دما: $this->temperature";
    }
}

$drink1 = new Drink("لیموناد", "سرد");
$drink2 = new Drink("قهوه", "گرم");

$drink1->describe();
echo "<br>";
$drink2->describe();