<?php

namespace Flagrow\CannedMessages\Validators;

use Flarum\Foundation\AbstractValidator;

class MessageValidator extends AbstractValidator
{
    protected function getRules()
    {
        return [
            'key' => 'required|alpha_dash',
            'locale' => 'sometimes|string',
            'style' => 'sometimes|string',
            'content' => 'required|string',
        ];
    }
}
