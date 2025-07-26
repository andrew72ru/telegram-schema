<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for NetworkStatisticsEntry types
 */
abstract class NetworkStatisticsEntry implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
