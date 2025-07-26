<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PaidMedia types
 */
abstract class PaidMedia implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
