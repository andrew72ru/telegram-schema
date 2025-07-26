<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns TGS stickers with generic animations for custom emoji reactions
 */
class GetCustomEmojiReactionAnimations extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCustomEmojiReactionAnimations',
        ];
    }
}
