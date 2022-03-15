<?php

namespace Web\App\Api\V1\Controllers;

use App\Services\Telegram;
use App\Http\Controllers\Controller;

/** @OA\Info(title="Telegram BOT API", version="0.1") */
class TelegramController extends Controller
{
    /**
     * @OA\Get(
     *     path="/send-subscriber-msg",
     *     summary="Send Message to Subscriber",
     *     description="The bot can send message to subscribers that are subscribed to the channel",
     *     tags={"Telegram"},
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *     security={
     *         {"petstore_auth": {"write:pets", "read:pets"}}
     *     },
     * )
     */
    public function sendMessageToSubscribers()
    {
       return (new Telegram())->sendMessage();
    }

    /**
     * @OA\Get(
     *     path="/set-webhook",
     *     summary="Set Webhook",
     *     description="Set webhook to receive incoming updates via an outgoing webhook",
     *     tags={"Telegram"},
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *     security={
     *         {"petstore_auth": {"write:pets", "read:pets"}}
     *     },
     * )
     */
    public function setWebhook()
    {
        return (new Telegram())->setWebhook();
    }
}
