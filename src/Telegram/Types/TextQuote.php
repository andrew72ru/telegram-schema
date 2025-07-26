<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes manually or automatically chosen quote from another message
 */
class TextQuote implements \JsonSerializable
{
    public function __construct(
        /** Text of the quote. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities can be present in the text */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Approximate quote position in the original message in UTF-16 code units as specified by the message sender */
        #[SerializedName('position')]
        private int $position,
        /** True, if the quote was manually chosen by the message sender */
        #[SerializedName('is_manual')]
        private bool $isManual,
    ) {
    }

    /**
     * Get Text of the quote. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities can be present in the text
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the quote. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities can be present in the text
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Approximate quote position in the original message in UTF-16 code units as specified by the message sender
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * Set Approximate quote position in the original message in UTF-16 code units as specified by the message sender
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get True, if the quote was manually chosen by the message sender
     */
    public function getIsManual(): bool
    {
        return $this->isManual;
    }

    /**
     * Set True, if the quote was manually chosen by the message sender
     */
    public function setIsManual(bool $isManual): self
    {
        $this->isManual = $isManual;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textQuote',
            'text' => $this->getText(),
            'position' => $this->getPosition(),
            'is_manual' => $this->getIsManual(),
        ];
    }
}
