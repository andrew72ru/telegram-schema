<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PaymentFormType types.
 */
abstract class PaymentFormType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
