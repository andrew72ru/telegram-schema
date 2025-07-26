<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PublicForward types
 */
abstract class PublicForward implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
