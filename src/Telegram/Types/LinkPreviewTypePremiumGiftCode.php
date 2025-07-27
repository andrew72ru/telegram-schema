<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to a Telegram Premium gift code.
 */
class LinkPreviewTypePremiumGiftCode extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypePremiumGiftCode',
        ];
    }
}
