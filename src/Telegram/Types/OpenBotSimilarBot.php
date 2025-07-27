<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that a bot was opened from the list of similar bots.
 */
class OpenBotSimilarBot extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the original bot, which similar bots were requested */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the opened bot */
        #[SerializedName('opened_bot_user_id')]
        private int $openedBotUserId,
    ) {
    }

    /**
     * Get Identifier of the original bot, which similar bots were requested.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the original bot, which similar bots were requested.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the opened bot.
     */
    public function getOpenedBotUserId(): int
    {
        return $this->openedBotUserId;
    }

    /**
     * Set Identifier of the opened bot.
     */
    public function setOpenedBotUserId(int $openedBotUserId): self
    {
        $this->openedBotUserId = $openedBotUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'openBotSimilarBot',
            'bot_user_id' => $this->getBotUserId(),
            'opened_bot_user_id' => $this->getOpenedBotUserId(),
        ];
    }
}
