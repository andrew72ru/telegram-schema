<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to the theme section of the application settings.
 */
class InternalLinkTypeThemeSettings extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeThemeSettings',
        ];
    }
}
