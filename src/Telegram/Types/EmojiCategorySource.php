<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for EmojiCategorySource types.
 */
abstract class EmojiCategorySource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
