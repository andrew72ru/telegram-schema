<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to the privacy and security section of the application settings.
 */
class InternalLinkTypePrivacyAndSecuritySettings extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePrivacyAndSecuritySettings',
        ];
    }
}
