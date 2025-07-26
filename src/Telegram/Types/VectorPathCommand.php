<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for VectorPathCommand types
 */
abstract class VectorPathCommand implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
