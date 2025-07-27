<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BackgroundFill types.
 */
abstract class BackgroundFill implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
