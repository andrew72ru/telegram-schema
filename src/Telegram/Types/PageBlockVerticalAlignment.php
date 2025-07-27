<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PageBlockVerticalAlignment types.
 */
abstract class PageBlockVerticalAlignment implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
