<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatStatisticsObjectType types
 */
abstract class ChatStatisticsObjectType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
