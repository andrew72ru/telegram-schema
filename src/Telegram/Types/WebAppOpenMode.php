<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for WebAppOpenMode types.
 */
abstract class WebAppOpenMode implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
