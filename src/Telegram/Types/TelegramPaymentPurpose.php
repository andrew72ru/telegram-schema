<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TelegramPaymentPurpose types
 */
abstract class TelegramPaymentPurpose implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
