<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS link, which can be used to get information about the current user
 */
class GetUserLink extends UserLink implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getUserLink',
        ];
    }
}
