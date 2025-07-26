<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for KeyboardButtonType types
 */
abstract class KeyboardButtonType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
