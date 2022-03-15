<?php

namespace App\Console\Commands;

use App\Services\Telegram;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class TestTelegramSDK extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:telegram-sdk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $test = (new Telegram())->sendMessage();
        dd($test);
    }
}
