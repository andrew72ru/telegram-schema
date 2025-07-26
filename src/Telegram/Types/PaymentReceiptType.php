<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PaymentReceiptType types
 */
abstract class PaymentReceiptType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
