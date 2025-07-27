<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CallbackQueryPayload types.
 */
abstract class CallbackQueryPayload implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
