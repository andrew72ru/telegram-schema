<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for Update types
 */
abstract class Update implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
