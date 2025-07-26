<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a giveaway
 */
class GetGiveawayInfo extends GiveawayInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel chat which started the giveaway */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the giveaway or a giveaway winners message in the chat */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the channel chat which started the giveaway
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the channel chat which started the giveaway
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the giveaway or a giveaway winners message in the chat
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the giveaway or a giveaway winners message in the chat
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGiveawayInfo',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
