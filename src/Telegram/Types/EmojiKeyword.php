<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an emoji with its keyword @emoji The emoji @keyword The keyword.
 */
class EmojiKeyword implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji')]
        private string $emoji,
        #[SerializedName('keyword')]
        private string $keyword,
    ) {
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiKeyword',
            'emoji' => $this->getEmoji(),
            'keyword' => $this->getKeyword(),
        ];
    }
}
