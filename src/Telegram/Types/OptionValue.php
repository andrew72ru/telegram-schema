<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for OptionValue types
 */
abstract class OptionValue implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
