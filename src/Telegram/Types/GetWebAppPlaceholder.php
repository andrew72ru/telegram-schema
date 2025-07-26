<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a default placeholder for Web Apps of a bot. This is an offline method. Returns a 404 error if the placeholder isn't known @bot_user_id Identifier of the target bot
 */
class GetWebAppPlaceholder extends Outline implements \JsonSerializable
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
            '@type' => 'getWebAppPlaceholder',
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
