<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageFileType types
 */
abstract class MessageFileType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
