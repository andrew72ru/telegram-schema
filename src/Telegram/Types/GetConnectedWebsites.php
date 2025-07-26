<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns all website where the current user used Telegram to log in
 */
class GetConnectedWebsites extends ConnectedWebsites implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getConnectedWebsites',
        ];
    }
}
