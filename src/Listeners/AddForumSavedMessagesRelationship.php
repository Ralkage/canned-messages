<?php

namespace Flagrow\CannedMessages\Listeners;

use Flagrow\CannedMessages\Api\Serializers\MessageSerializer;
use Flagrow\CannedMessages\Repositories\MessageRepository;
use Flarum\Api\Controller\ShowForumController;
use Flarum\Api\Serializer\ForumSerializer;
use Flarum\Api\Event\WillGetData;
use Flarum\Event\GetApiRelationship;
use Flarum\Api\Event\WillSerializeData;
use Flarum\Locale\LocaleManager;
use Illuminate\Contracts\Events\Dispatcher;

class AddForumSavedMessagesRelationship
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(GetApiRelationship::class, [$this, 'getApiRelationship']);
        $events->listen(WillGetData::class, [$this, 'loadRelationship']);
        $events->listen(GetApiRelationship::class, [$this, ' isRelationship']);
    }

    public function getApiRelationship(GetApiRelationship $event)
    {
        if ($event->isRelationship(ForumSerializer::class, 'flagrow-canned-messages')) {
            return $event->serializer->hasMany($event->model, MessageSerializer::class, 'flagrow-canned-messages');
        }
    }

    public function loadRelationship(WillSerializeData $event)
    {
        /**
         * @var $messages MessageRepository
         */
        $messages = app(MessageRepository::class);

        /**
         * @var $locales LocaleManager
         */
        $locales = app(LocaleManager::class);

        if ($event->isController(ShowForumController::class)) {
            $event->data['flagrow-canned-messages'] = $messages->messagesForLocale($locales->getLocale());
        }
    }

    public function  isRelationship(WillGetData $event)
    {
        if ($event->isController(ShowForumController::class)) {
            $event->addInclude([
                'flagrow-canned-messages',
            ]);
        }
    }
}
