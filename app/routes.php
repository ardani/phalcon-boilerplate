<?php

use Phalcon\Mvc\Micro\Collection as MicroCollection;

$appController = new MicroCollection();
$appController->setHandler(App\Controllers\AppController::class, true);
$appController->get('/', 'hi');

$micro->mount($appController);

$micro->notFound(function () {
    return abort(404);
});