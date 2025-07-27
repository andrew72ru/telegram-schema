<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TextParseMode types.
 */
abstract class TextParseMode implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
