<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Saves an inline message to be sent by the given user.
 */
class GetPreparedInlineMessage extends PreparedInlineMessage implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot that created the message */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the prepared message */
        #[SerializedName('prepared_message_id')]
        private string $preparedMessageId,
    ) {
    }

    /**
     * Get Identifier of the bot that created the message.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot that created the message.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the prepared message.
     */
    public function getPreparedMessageId(): string
    {
        return $this->preparedMessageId;
    }

    /**
     * Set Identifier of the prepared message.
     */
    public function setPreparedMessageId(string $preparedMessageId): self
    {
        $this->preparedMessageId = $preparedMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPreparedInlineMessage',
            'bot_user_id' => $this->getBotUserId(),
            'prepared_message_id' => $this->getPreparedMessageId(),
        ];
    }
}
