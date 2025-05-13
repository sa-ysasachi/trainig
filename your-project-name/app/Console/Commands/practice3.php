<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class practice3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:practice3';

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
    {
        $sales = [
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-04-01"],
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-04-01"],
            ['product' => 'えび', 'price' => 150, 'date' => "2024-04-01"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-04-01"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-04-01"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-01"],
            ['product' => 'いか', 'price' => 100, 'date' => "2024-04-01"],
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-04-02"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-04-02"],
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-04-02"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-04-02"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-02"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-03"],
            ['product' => 'えび', 'price' => 150, 'date' => "2024-04-03"],
            ['product' => 'えび', 'price' => 150, 'date' => "2024-04-03"],
            ['product' => 'いか', 'price' => 100, 'date' => "2024-04-03"],
            ['product' => 'いか', 'price' => 100, 'date' => "2024-04-03"],
            ['product' => 'えび', 'price' => 150, 'date' => "2024-04-03"],
            ['product' => 'えび', 'price' => 150, 'date' => "2024-04-03"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-05"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-05"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-05"],
            ['product' => '茶碗蒸し', 'price' => 250, 'date' => "2024-04-05"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-05-01"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-01"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-05-01"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-01"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-05-01"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-01"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-05-01"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-01"],
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-05-02"],
            ['product' => 'まぐろ', 'price' => 120, 'date' => "2024-05-02"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-02"],
            ['product' => 'かに', 'price' => 200, 'date' => "2024-05-02"],
            ['product' => 'うに', 'price' => 130, 'date' => "2024-05-02"],
          ];

          $date_list = [];
          


        //   $result = [];
        //   foreach ($sales as $sale) {
        //     $date = ($sale['date']);
        //     $product = ($sale['product']);
        //     $price = ($sale['price']);

        //    if (!isset($result[$date])) {
        //         $result[$date] = [];
        //    }
        //    var_dump($result);
        //    if (!isset($result[$product])) {
        //        $result[$date][$product] = 0;
        //    }
        //    $result[$date][$product] += $price;
        // }

        // $date_result = [];
        // foreach ($result as $date => $sales) {
        //     $date_result[$date] = $sales;
        //     foreach ($sales as $sale) {
        //         if (!isset($date_result[$date][$product])) {
        //             $date_result[$date][$product] = 0;
        //         }
        //         $date_result[$date][$product] += $price;
        
        //     }
        //     var_dump($date_result);
        // }

          
    }
}

