<?php
/** @var Router $router */

use Laravel\Lumen\Routing\Router;



$router->group(['namespace' => '\Web\App\Api\V1\Controllers'], function($group){
    $group->get('send-subscriber-msg', 'TelegramController@sendMessageToSubscribers');
    $group->get('set-webhook', 'TelegramController@setWebhook');
    $group->get('webhook', 'WebhookController@handle');
});
