<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to the change phone number section of the application.
 */
class InternalLinkTypeChangePhoneNumber extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeChangePhoneNumber',
        ];
    }
}
