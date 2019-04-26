<?php

namespace Flagrow\CannedMessages\Validators;

use Flarum\Foundation\AbstractValidator;

class SettingsValidator extends AbstractValidator
{
    protected function getRules()
    {
        return [
            'bbtag' => 'sometimes|regex:~^[A-Z_-]+$~',
        ];
    }
}
