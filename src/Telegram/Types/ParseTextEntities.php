<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Parses Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, Code, Pre, PreCode, TextUrl.
 */
class ParseTextEntities extends FormattedText implements \JsonSerializable
{
    public function __construct(
        /** The text to parse */
        #[SerializedName('text')]
        private string $text,
        /** Text parse mode */
        #[SerializedName('parse_mode')]
        private TextParseMode|null $parseMode = null,
    ) {
    }

    /**
     * Get The text to parse.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set The text to parse.
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Text parse mode.
     */
    public function getParseMode(): TextParseMode|null
    {
        return $this->parseMode;
    }

    /**
     * Set Text parse mode.
     */
    public function setParseMode(TextParseMode|null $parseMode): self
    {
        $this->parseMode = $parseMode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'parseTextEntities',
            'text' => $this->getText(),
            'parse_mode' => $this->getParseMode(),
        ];
    }
}
