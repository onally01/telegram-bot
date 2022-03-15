<?php


namespace Web\App\Api\V1\Controllers;


use App\Http\Controllers\Controller;
use Telegram\Bot\Api;


class WebHookController extends Controller
{
    /**
     * @OA\Get(
     *     path="/webhook",
     *     summary="Recieve webhook",
     *     description="Receive webhook from Telegram",
     *     tags={"Telegram"},
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     * )
     */
    public function handle()
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        return $telegram->getWebhookUpdates();
    }
}
