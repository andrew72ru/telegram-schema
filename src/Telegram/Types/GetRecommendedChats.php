<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of channel chats recommended to the current user
 */
class GetRecommendedChats extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecommendedChats',
        ];
    }
}
