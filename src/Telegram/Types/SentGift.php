<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SentGift types.
 */
abstract class SentGift implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
