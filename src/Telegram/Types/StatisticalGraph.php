<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StatisticalGraph types
 */
abstract class StatisticalGraph implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
