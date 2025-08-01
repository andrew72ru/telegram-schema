<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StickerType types.
 */
abstract class StickerType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
