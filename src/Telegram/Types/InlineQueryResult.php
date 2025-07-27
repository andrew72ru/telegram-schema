<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InlineQueryResult types.
 */
abstract class InlineQueryResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
