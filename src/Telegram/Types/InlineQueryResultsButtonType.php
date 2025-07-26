<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InlineQueryResultsButtonType types
 */
abstract class InlineQueryResultsButtonType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
