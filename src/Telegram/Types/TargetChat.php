<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TargetChat types.
 */
abstract class TargetChat implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
