<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SecretChatState types.
 */
abstract class SecretChatState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
