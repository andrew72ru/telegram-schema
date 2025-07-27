<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatPhotoStickerType types.
 */
abstract class ChatPhotoStickerType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
