<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for RichText types
 */
abstract class RichText implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
