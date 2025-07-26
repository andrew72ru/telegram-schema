<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StarSubscriptionType types
 */
abstract class StarSubscriptionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
