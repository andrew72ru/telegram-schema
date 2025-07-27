<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link preview type is unsupported yet.
 */
class LinkPreviewTypeUnsupported extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeUnsupported',
        ];
    }
}
