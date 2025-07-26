<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BusinessFeature types
 */
abstract class BusinessFeature implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
