<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class practice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:practice';

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

        $hello = $this->hello("大川");
        var_dump($hello);
        $hello = $this->hello("鎌田");
        var_dump($hello);
    }

    private function hello(string $name):string
    {
        return "こんにちは".$name."さん！";
    }

}
