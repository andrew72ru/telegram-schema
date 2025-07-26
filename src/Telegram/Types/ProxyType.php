<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ProxyType types
 */
abstract class ProxyType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
