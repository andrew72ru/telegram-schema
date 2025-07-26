<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PassportElementType types
 */
abstract class PassportElementType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
