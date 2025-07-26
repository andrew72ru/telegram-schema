<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputPaidMediaType types
 */
abstract class InputPaidMediaType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
