<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatEventAction types.
 */
abstract class ChatEventAction implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
