<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of media previews of a bot @bot_user_id Identifier of the target bot. The bot must have the main Web App.
 */
class GetBotMediaPreviews extends BotMediaPreviews implements \JsonSerializable
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
            '@type' => 'getBotMediaPreviews',
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
