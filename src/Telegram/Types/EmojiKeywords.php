<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of emojis with their keywords @emoji_keywords List of emojis with their keywords
 */
class EmojiKeywords implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji_keywords')]
        private array|null $emojiKeywords = null,
    ) {
    }

    public function getEmojiKeywords(): array|null
    {
        return $this->emojiKeywords;
    }

    public function setEmojiKeywords(array|null $emojiKeywords): self
    {
        $this->emojiKeywords = $emojiKeywords;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiKeywords',
            'emoji_keywords' => $this->getEmojiKeywords(),
        ];
    }
}
