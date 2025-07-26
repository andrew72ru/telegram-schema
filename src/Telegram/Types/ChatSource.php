<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatSource types
 */
abstract class ChatSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
