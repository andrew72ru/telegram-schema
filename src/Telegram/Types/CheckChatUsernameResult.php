<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CheckChatUsernameResult types
 */
abstract class CheckChatUsernameResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
