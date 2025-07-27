<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for RevenueWithdrawalState types.
 */
abstract class RevenueWithdrawalState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
