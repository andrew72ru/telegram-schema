<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CanSendMessageToUserResult types
 */
abstract class CanSendMessageToUserResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
