<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TMeUrlType types.
 */
abstract class TMeUrlType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
