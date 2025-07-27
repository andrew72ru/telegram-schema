<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StickerFullType types.
 */
abstract class StickerFullType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
