<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StorePaymentPurpose types.
 */
abstract class StorePaymentPurpose implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
