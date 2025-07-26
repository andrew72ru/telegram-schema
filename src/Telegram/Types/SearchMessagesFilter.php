<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SearchMessagesFilter types
 */
abstract class SearchMessagesFilter implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
