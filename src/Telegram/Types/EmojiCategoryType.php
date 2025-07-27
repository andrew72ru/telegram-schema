<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for EmojiCategoryType types.
 */
abstract class EmojiCategoryType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
