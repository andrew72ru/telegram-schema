<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a forum topic icon @color Color of the topic icon in RGB format @custom_emoji_id Unique identifier of the custom emoji shown on the topic icon; 0 if none
 */
class ForumTopicIcon implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('color')]
        private int $color,
        #[SerializedName('custom_emoji_id')]
        private int $customEmojiId,
    ) {
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor(int $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getCustomEmojiId(): int
    {
        return $this->customEmojiId;
    }

    public function setCustomEmojiId(int $customEmojiId): self
    {
        $this->customEmojiId = $customEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'forumTopicIcon',
            'color' => $this->getColor(),
            'custom_emoji_id' => $this->getCustomEmojiId(),
        ];
    }
}
