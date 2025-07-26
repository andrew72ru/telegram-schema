<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether the maximum number of owned public chats has been reached. Returns corresponding error if the limit was reached. The limit can be increased with Telegram Premium @type Type of the public chats, for which to check the limit
 */
class CheckCreatedPublicChatsLimit extends Ok implements \JsonSerializable
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
            '@type' => 'checkCreatedPublicChatsLimit',
            'type' => $this->getType(),
        ];
    }
}
