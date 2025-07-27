<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to the folder section of the application settings.
 */
class InternalLinkTypeChatFolderSettings extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeChatFolderSettings',
        ];
    }
}
