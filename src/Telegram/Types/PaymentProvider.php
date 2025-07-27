<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PaymentProvider types.
 */
abstract class PaymentProvider implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
