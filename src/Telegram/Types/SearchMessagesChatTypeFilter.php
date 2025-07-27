<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SearchMessagesChatTypeFilter types.
 */
abstract class SearchMessagesChatTypeFilter implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
