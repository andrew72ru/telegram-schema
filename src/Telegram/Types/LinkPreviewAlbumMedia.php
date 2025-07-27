<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for LinkPreviewAlbumMedia types.
 */
abstract class LinkPreviewAlbumMedia implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
