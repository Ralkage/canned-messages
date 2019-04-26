<?php

/*
 * This file is part of flagrow/canned-messages.
 *
 * Copyright (c) 2019 Clark Winkelmann.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Flagrow\CannedMessages;

use Flagrow\CannedMessages\Api\Controllers\MessageIndexController;
use Flagrow\CannedMessages\Api\Controllers\MessageStoreController;
use Flagrow\CannedMessages\Api\Controllers\MessageUpdateController;
use Flagrow\CannedMessages\Api\Controllers\MessageDeleteController;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->css(__DIR__ . '/resources/less/admin.less'),
    (new Extend\Routes('api'))
        ->get(
            '/flagrow/canned-messages',
            'flagrow.canned-messages.api.messages.index',
            MessageIndexController::class
        )
        ->post(
            '/flagrow/canned-messages',
            'flagrow.canned-messages.api.messages.store',
            MessageStoreController::class
        )
        ->patch(
            '/flagrow/canned-messages/{id:[0-9]+}',
            'flagrow.canned-messages.api.messages.update',
            MessageUpdateController::class
        )
        ->delete(
            '/flagrow/canned-messages/{id:[0-9]+}',
            'flagrow.canned-messages.api.messages.delete',
            MessageDeleteController::class
        ),
    new Extend\Locales(__DIR__ . '/resources/locale')
];
