<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class ticket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ticket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {$customers = [
        ['customer_id' => 1, 'name' => '笹地', 'age' => 20, 'gender' => 'male', 'show_date' => '2025-05-01 10:00' ],
        ['customer_id' => 2, 'name' => '今山', 'age' => 10, 'gender' => 'male', 'show_date' => '2025-05-01 21:00'],
        ['customer_id' => 3, 'name' => '落合', 'age' => 30, 'gender' => 'female',  'show_date' => '2025-05-08 21:00'],
        ['customer_id' => 4, 'name' => '大川', 'age' => 80, 'gender' => 'female',  'show_date' => '2025-05-07 21:00'],
        ['customer_id' => 5, 'name' => '鈴木', 'age' => 15, 'gender' => 'male',  'show_date' => '2025-05-08 10:00'],
        ['customer_id' => 6, 'name' => '鎌田', 'age' => 100, 'gender' => 'male',  'show_date' => '2025-05-08 10:00'],
        ['customer_id' => 7, 'name' => '鎌田', 'age' => 100, 'gender' => 'female',  'show_date' => '2025-05-07 10:00'],
    ];

    //.1
    foreach ($customers as $customer) {
        $price = $this->calculatePrice($customer);
        $this->printTicket($customer['name'], $price);
    }
}

//.2
function calculatePrice(array $customer): int
{
    // 年齢から基本料金を取得
    $basePrice = $this->getBasePrice($customer['age']);
    $prices = [$basePrice]; // 初期値として基本料金を設定

    // 割引料金の適用
    if ($this->isLadiesDay($customer['show_date']) && $this->gender($customer['gender'])){
        $prices[] = 1100; // レディースデー料金
    } elseif ($this->isLateShow($customer['show_date'])) {
        $prices[] = 1300; // レイトショー料金
    } // 子ども料金
    elseif ($customer['age'] <= 12) {
        $prices[] = 1000;
    }
    // 学生料金
    elseif ($customer['age'] >= 13 && $customer['age'] <= 18) {
        $prices[] = 1500;
    }
    // シニア料金
    if ($customer['age'] >= 60) {
        $prices[] = 1200;
    }
    
    return min($prices); // 最終的な料金を返す
}

//.3.年齢によって返す数値を決める
function getBasePrice(int $age): int {
if ($age <= 12) {
        return 1000;
    }
    elseif ($age > 13 && $age < 18) {
        return 1500;
    }
    elseif ($age >= 60) {
        return 1200;
    }
    else {
        return 1800;
    }
}

//.4.性別がfemaleの場合にtrueを返す
function gender(string $gender): bool
{
    if ($gender === 'female') {
        return true;
    }
    else {
        return false;
    }
}

//.5.曜日が水曜だった場合にtrueを返す
private function isLadiesDay(string $show_date): bool
{
    $format = 'Y-m-d H:i';
    $carbonDate = Carbon::createFromFormat($format, $show_date);
    return $carbonDate->isWednesday();
}

//.6.時間が20:00以降だったらtrueを返す
function isLateShow(string $showTime): bool
{
    $format = 'Y-m-d H:i';
    $carbonDate = Carbon::createFromFormat($format, $showTime);

    return $carbonDate->hour >= 20;
}

function printTicket(string $name, int $price): void
{
    echo $name . "さんのチケット料金：" . $price . "円\n";
}

// private function calculatePrice(array $customer):int
// {
//     $basePrice = getBasePrice($customer['age']);
//     $finalPrice = $basePrice;

//     if (isLateShow($customer['show_date'])) {
//         $finalPrice = 1300;
//     }
//     elseif (isLadiesDay($customer['gender'])) {
//         $finalPrice = 1100;
//     }

//     return $finalPrice;
}

