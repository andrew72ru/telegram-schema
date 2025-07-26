<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a sponsored message to Telegram moderators
 */
class ReportChatSponsoredMessage extends ReportSponsoredResult implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the sponsored message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the sponsored message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Option identifier chosen by the user; leave empty for the initial request */
        #[SerializedName('option_id')]
        private string $optionId,
    ) {
    }

    /**
     * Get Chat identifier of the sponsored message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the sponsored message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the sponsored message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the sponsored message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Option identifier chosen by the user; leave empty for the initial request
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }

    /**
     * Set Option identifier chosen by the user; leave empty for the initial request
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChatSponsoredMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'option_id' => $this->getOptionId(),
        ];
    }
}
