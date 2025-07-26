<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sticker is a custom emoji to be used inside message text and caption
 */
class StickerTypeCustomEmoji extends StickerType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerTypeCustomEmoji',
        ];
    }
}
