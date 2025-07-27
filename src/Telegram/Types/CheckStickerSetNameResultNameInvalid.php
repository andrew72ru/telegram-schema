<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The name is invalid.
 */
class CheckStickerSetNameResultNameInvalid extends CheckStickerSetNameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkStickerSetNameResultNameInvalid',
        ];
    }
}
