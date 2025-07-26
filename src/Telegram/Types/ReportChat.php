<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a chat to the Telegram moderators. A chat can be reported only from the chat action bar, or if chat.can_be_reported
 */
class ReportChat extends ReportChatResult implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Option identifier chosen by the user; leave empty for the initial request */
        #[SerializedName('option_id')]
        private string $optionId,
        /** Identifiers of reported messages. Use messageProperties.can_report_chat to check whether the message can be reported */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** Additional report details if asked by the server; 0-1024 characters; leave empty for the initial request */
        #[SerializedName('text')]
        private string $text,
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

    /**
     * Get Identifiers of reported messages. Use messageProperties.can_report_chat to check whether the message can be reported
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of reported messages. Use messageProperties.can_report_chat to check whether the message can be reported
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get Additional report details if asked by the server; 0-1024 characters; leave empty for the initial request
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Additional report details if asked by the server; 0-1024 characters; leave empty for the initial request
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportChat',
            'chat_id' => $this->getChatId(),
            'option_id' => $this->getOptionId(),
            'message_ids' => $this->getMessageIds(),
            'text' => $this->getText(),
        ];
    }
}
