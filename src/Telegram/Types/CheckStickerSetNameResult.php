<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CheckStickerSetNameResult types.
 */
abstract class CheckStickerSetNameResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
