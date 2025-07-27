<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BackgroundType types.
 */
abstract class BackgroundType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
