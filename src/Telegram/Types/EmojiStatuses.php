<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of emoji statuses @emoji_statuses The list of emoji statuses identifiers
 */
class EmojiStatuses implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji_statuses')]
        private array|null $emojiStatuses = null,
    ) {
    }

    public function getEmojiStatuses(): array|null
    {
        return $this->emojiStatuses;
    }

    public function setEmojiStatuses(array|null $emojiStatuses): self
    {
        $this->emojiStatuses = $emojiStatuses;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiStatuses',
            'emoji_statuses' => $this->getEmojiStatuses(),
        ];
    }
}
