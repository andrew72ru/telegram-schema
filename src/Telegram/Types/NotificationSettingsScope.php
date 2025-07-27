<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for NotificationSettingsScope types.
 */
abstract class NotificationSettingsScope implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
