<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for DiceStickers types
 */
abstract class DiceStickers implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
