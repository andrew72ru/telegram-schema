<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat boost has changed; for bots only
 */
class UpdateChatBoost extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New information about the boost */
        #[SerializedName('boost')]
        private ChatBoost|null $boost = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New information about the boost
     */
    public function getBoost(): ChatBoost|null
    {
        return $this->boost;
    }

    /**
     * Set New information about the boost
     */
    public function setBoost(ChatBoost|null $boost): self
    {
        $this->boost = $boost;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatBoost',
            'chat_id' => $this->getChatId(),
            'boost' => $this->getBoost(),
        ];
    }
}
