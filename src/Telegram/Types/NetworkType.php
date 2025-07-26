<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for NetworkType types
 */
abstract class NetworkType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
