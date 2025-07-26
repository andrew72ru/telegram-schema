<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for GroupCallVideoQuality types
 */
abstract class GroupCallVideoQuality implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
