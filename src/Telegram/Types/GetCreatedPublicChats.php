<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of public chats of the specified type, owned by the user @var Type of the public chats to return.
 */
class GetCreatedPublicChats extends Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PublicChatType|null $type = null,
    ) {
    }

    public function getType(): PublicChatType|null
    {
        return $this->type;
    }

    public function setType(PublicChatType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCreatedPublicChats',
            'type' => $this->getType(),
        ];
    }
}
