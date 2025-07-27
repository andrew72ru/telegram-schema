<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to a text or a poll Telegram message.
 */
class LinkPreviewTypeMessage extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeMessage',
        ];
    }
}
