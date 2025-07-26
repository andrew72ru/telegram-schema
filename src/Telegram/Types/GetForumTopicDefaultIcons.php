<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of custom emoji, which can be used as forum topic icon by all users
 */
class GetForumTopicDefaultIcons extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getForumTopicDefaultIcons',
        ];
    }
}
