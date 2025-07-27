<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link can be used to login the current user on another device, but it must be scanned from QR-code using in-app camera. An alert similar to.
 */
class InternalLinkTypeQrCodeAuthentication extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeQrCodeAuthentication',
        ];
    }
}
