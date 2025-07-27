<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for LinkPreviewType types.
 */
abstract class LinkPreviewType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
