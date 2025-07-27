<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns approximate number of bots similar to the given bot.
 */
class GetBotSimilarBotCount extends Count implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Pass true to get the number of bots without sending network requests, or -1 if the number of bots is unknown locally */
        #[SerializedName('return_local')]
        private bool $returnLocal,
    ) {
    }

    /**
     * Get User identifier of the target bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the target bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Pass true to get the number of bots without sending network requests, or -1 if the number of bots is unknown locally.
     */
    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    /**
     * Set Pass true to get the number of bots without sending network requests, or -1 if the number of bots is unknown locally.
     */
    public function setReturnLocal(bool $returnLocal): self
    {
        $this->returnLocal = $returnLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBotSimilarBotCount',
            'bot_user_id' => $this->getBotUserId(),
            'return_local' => $this->getReturnLocal(),
        ];
    }
}
