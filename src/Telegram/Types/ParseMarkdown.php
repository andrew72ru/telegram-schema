<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Parses Markdown entities in a human-friendly format, ignoring markup errors. Can be called synchronously
 */
class ParseMarkdown extends FormattedText implements \JsonSerializable
{
    public function __construct(
        /** The text to parse. For example, "__italic__ ~~strikethrough~~ ||spoiler|| **bold** `code` ```pre``` __[italic__ text_url](telegram.org) __italic**bold italic__bold**" */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get The text to parse. For example, "__italic__ ~~strikethrough~~ ||spoiler|| **bold** `code` ```pre``` __[italic__ text_url](telegram.org) __italic**bold italic__bold**"
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set The text to parse. For example, "__italic__ ~~strikethrough~~ ||spoiler|| **bold** `code` ```pre``` __[italic__ text_url](telegram.org) __italic**bold italic__bold**"
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'parseMarkdown',
            'text' => $this->getText(),
        ];
    }
}
