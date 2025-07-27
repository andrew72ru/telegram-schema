<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to a shareable chat folder.
 */
class LinkPreviewTypeShareableChatFolder extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeShareableChatFolder',
        ];
    }
}
