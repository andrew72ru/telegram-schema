<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a business chat link.
 */
class BusinessChatLinkInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the private chat that created the link */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message draft text that must be added to the input field */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get Identifier of the private chat that created the link.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the private chat that created the link.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message draft text that must be added to the input field.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message draft text that must be added to the input field.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessChatLinkInfo',
            'chat_id' => $this->getChatId(),
            'text' => $this->getText(),
        ];
    }
}
