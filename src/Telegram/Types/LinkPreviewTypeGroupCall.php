<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to a group call that isn't bound to a chat.
 */
class LinkPreviewTypeGroupCall extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeGroupCall',
        ];
    }
}
