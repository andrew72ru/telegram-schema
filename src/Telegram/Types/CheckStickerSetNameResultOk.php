<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The name can be set.
 */
class CheckStickerSetNameResultOk extends CheckStickerSetNameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkStickerSetNameResultOk',
        ];
    }
}
