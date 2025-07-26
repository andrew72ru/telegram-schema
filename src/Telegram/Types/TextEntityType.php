<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TextEntityType types
 */
abstract class TextEntityType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
