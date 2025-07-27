<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The text uses Markdown-style formatting.
 */
class TextParseModeMarkdown extends TextParseMode implements \JsonSerializable
{
    public function __construct(
        /** Version of the parser: 0 or 1 - Telegram Bot API "Markdown" parse mode, 2 - Telegram Bot API "MarkdownV2" parse mode */
        #[SerializedName('version')]
        private int $version,
    ) {
    }

    /**
     * Get Version of the parser: 0 or 1 - Telegram Bot API "Markdown" parse mode, 2 - Telegram Bot API "MarkdownV2" parse mode.
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * Set Version of the parser: 0 or 1 - Telegram Bot API "Markdown" parse mode, 2 - Telegram Bot API "MarkdownV2" parse mode.
     */
    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textParseModeMarkdown',
            'version' => $this->getVersion(),
        ];
    }
}
