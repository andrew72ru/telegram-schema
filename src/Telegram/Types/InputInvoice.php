<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputInvoice types.
 */
abstract class InputInvoice implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
