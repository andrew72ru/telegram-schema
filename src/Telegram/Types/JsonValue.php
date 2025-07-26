<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for JsonValue types
 */
abstract class JsonValue implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
