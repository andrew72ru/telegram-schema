<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of bots owned by the current user
 */
class GetOwnedBots extends Users implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getOwnedBots',
        ];
    }
}
