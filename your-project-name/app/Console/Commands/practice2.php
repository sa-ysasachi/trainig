<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class practice2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:practice2';

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
        $hello = $this->greet("大川");
        dd($hello);
    }
    private function greet(string $name):string
    {
        $now = Carbon::now();
        $hello = "";
        if ($now->hour >= 7 && $now->hour < 12) {
            $hello = "おはよう".$name."さん！";
        }
        elseif($now->hour >= 12 && $now->hour < 18) {
            $hello = "こんにちは".$name."さん！";
        }
        elseif($now->hour >= 18 && $now->hour < 22) {
            $hello = "こんばんは".$name."さん！";
        }
        else {
            $hello = "寝てるからやめよう";
        }
        return $hello;
    }
}
