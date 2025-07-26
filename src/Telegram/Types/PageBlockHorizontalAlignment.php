<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PageBlockHorizontalAlignment types
 */
abstract class PageBlockHorizontalAlignment implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
