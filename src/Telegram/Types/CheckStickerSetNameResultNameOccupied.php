<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The name is occupied.
 */
class CheckStickerSetNameResultNameOccupied extends CheckStickerSetNameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkStickerSetNameResultNameOccupied',
        ];
    }
}
