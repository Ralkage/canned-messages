<?php

namespace Flagrow\CannedMessages\Listeners;

use Flagrow\CannedMessages\Validators\SettingsValidator;
use Flarum\Settings\Event\Serializing;
use Illuminate\Contracts\Events\Dispatcher;

class CheckBBTagFormat
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(Serializing::class, [$this, 'check']);
    }

    public function check(Serializing $event)
    {
        if ($event->key !== 'flagrow.canned-messages.bbtag') {
            return;
        }

        /**
         * @var $validator SettingsValidator
         */
        $validator = app(SettingsValidator::class);

        $validator->assertValid([
            'bbtag' => $event->value,
        ]);
    }

}
