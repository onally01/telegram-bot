<?php

namespace App\Services;

use Telegram\Bot\Api;

class Telegram
{
    public function setWebhook()
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        return $telegram->setWebhook(['url' => env('TELEGRAM_WEBHOOK_URL')]);
    }

    public function connect()
    {
        return new TeleBot([
            'token'      => config('telebot.token'),
            'api_url'    => config('telebot.api_url'),
            'exceptions' => config('telebot.exceptions'),
            'async'      => config('telebot.async')
        ]);
    }

    public function test()
    {
        return $this->connect()->approveChatJoinRequest([
            //'chat_id' => 625393805,
            'chat_id' => -1001437673577,
            'user_id' => 2011030461
        ]);
        return $this->connect()->getMe();
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
