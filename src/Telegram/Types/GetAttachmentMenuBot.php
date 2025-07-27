<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a bot that can be added to attachment or side menu @bot_user_id Bot's user identifier.
 */
class GetAttachmentMenuBot extends AttachmentMenuBot implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
    ) {
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAttachmentMenuBot',
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
