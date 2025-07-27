<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReplyMarkup types.
 */
abstract class ReplyMarkup implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
