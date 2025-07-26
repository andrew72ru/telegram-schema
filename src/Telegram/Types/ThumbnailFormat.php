<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ThumbnailFormat types
 */
abstract class ThumbnailFormat implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
