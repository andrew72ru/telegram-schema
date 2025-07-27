<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The sticker is an animation in TGS format.
 */
class StickerFormatTgs extends StickerFormat implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerFormatTgs',
        ];
    }
}
