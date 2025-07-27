<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes the business bot that is connected to the current user account @bot_user_id Unique user identifier for the bot.
 */
class DeleteBusinessConnectedBot extends Ok implements \JsonSerializable
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
            '@type' => 'deleteBusinessConnectedBot',
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
