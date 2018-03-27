<?php

namespace Flagrow\SavedMessages\Api\Controllers;

use Flagrow\SavedMessages\Api\Serializers\MessageSerializer;
use Flagrow\SavedMessages\Repositories\MessageRepository;
use Flarum\Api\Controller\AbstractCreateController;
use Flarum\Core\Access\AssertPermissionTrait;
use Illuminate\Support\Arr;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class MessageStoreController extends AbstractCreateController
{
    use AssertPermissionTrait;

    public $serializer = MessageSerializer::class;

    /**
     * @var MessageRepository
     */
    protected $messages;

    public function __construct(MessageRepository $strings)
    {
        $this->messages = $strings;
    }

    protected function data(ServerRequestInterface $request, Document $document)
    {
        $this->assertAdmin($request->getAttribute('actor'));

        $attributes = Arr::get($request->getParsedBody(), 'data.attributes', []);

        return $this->messages->store($attributes);
    }
}
