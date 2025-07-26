<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatRevenueTransactionType types
 */
abstract class ChatRevenueTransactionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
