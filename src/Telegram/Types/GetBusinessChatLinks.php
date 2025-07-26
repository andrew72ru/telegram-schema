<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns business chat links created for the current account
 */
class GetBusinessChatLinks extends BusinessChatLinks implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessChatLinks',
        ];
    }
}
