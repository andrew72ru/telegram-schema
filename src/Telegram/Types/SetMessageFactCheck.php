<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the fact-check of a message. Can be only used if messageProperties.can_set_fact_check == true
 */
class SetMessageFactCheck extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The channel chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** New text of the fact-check; 0-getOption("fact_check_length_max") characters; pass null to remove it. Only Bold, Italic, and TextUrl entities with https://t.me/ links are supported */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get The channel chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The channel chat the message belongs to
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get New text of the fact-check; 0-getOption("fact_check_length_max") characters; pass null to remove it. Only Bold, Italic, and TextUrl entities with https://t.me/ links are supported
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set New text of the fact-check; 0-getOption("fact_check_length_max") characters; pass null to remove it. Only Bold, Italic, and TextUrl entities with https://t.me/ links are supported
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setMessageFactCheck',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'text' => $this->getText(),
        ];
    }
}
