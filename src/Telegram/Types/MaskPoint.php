<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MaskPoint types.
 */
abstract class MaskPoint implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
