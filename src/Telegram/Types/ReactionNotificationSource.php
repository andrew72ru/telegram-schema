<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReactionNotificationSource types.
 */
abstract class ReactionNotificationSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
