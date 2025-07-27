<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PageBlock types.
 */
abstract class PageBlock implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
