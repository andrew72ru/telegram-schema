<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputCredentials types
 */
abstract class InputCredentials implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
