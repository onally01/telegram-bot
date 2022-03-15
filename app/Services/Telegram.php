<?php

namespace App\Services;

use Telegram\Bot\Api;

class Telegram
{
    public function setWebhook()
    {
        $telegram = new Api(config('telebot.token'));
        return $telegram->setWebhook(['url' => config('telebot.api_url')]);
    }

    public function sendMessage()
    {
        $telegram = new Api(config('telegram.token'));
        return $telegram->sendMessage([
            'chat_id' => -1001437673577,
            'text' => 'Hello world!'
        ]);
    }
}
