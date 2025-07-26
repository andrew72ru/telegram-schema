<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatStatistics types
 */
abstract class ChatStatistics implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
