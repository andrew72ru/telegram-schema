<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns greeting stickers from regular sticker sets that can be used for the start page of other users
 */
class GetGreetingStickers extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGreetingStickers',
        ];
    }
}
