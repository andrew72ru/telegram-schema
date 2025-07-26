<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes manually chosen quote from another message
 */
class InputTextQuote implements \JsonSerializable
{
    public function __construct(
        /** Text of the quote; 0-getOption("message_reply_quote_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed to be kept and must be kept in the quote */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Quote position in the original message in UTF-16 code units */
        #[SerializedName('position')]
        private int $position,
    ) {
    }

    /**
     * Get Text of the quote; 0-getOption("message_reply_quote_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed to be kept and must be kept in the quote
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the quote; 0-getOption("message_reply_quote_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed to be kept and must be kept in the quote
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Quote position in the original message in UTF-16 code units
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * Set Quote position in the original message in UTF-16 code units
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputTextQuote',
            'text' => $this->getText(),
            'position' => $this->getPosition(),
        ];
    }
}
