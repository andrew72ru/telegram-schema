<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InlineKeyboardButtonType types.
 */
abstract class InlineKeyboardButtonType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
