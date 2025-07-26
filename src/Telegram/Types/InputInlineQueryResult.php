<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputInlineQueryResult types
 */
abstract class InputInlineQueryResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
