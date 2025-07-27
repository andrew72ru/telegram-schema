<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link forces restore of App Store purchases when opened. For official iOS application only.
 */
class InternalLinkTypeRestorePurchases extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeRestorePurchases',
        ];
    }
}
