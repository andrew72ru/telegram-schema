<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for NotificationType types
 */
abstract class NotificationType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
