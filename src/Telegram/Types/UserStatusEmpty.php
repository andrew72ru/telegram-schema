<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user's status has never been changed
 */
class UserStatusEmpty extends UserStatus implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userStatusEmpty',
        ];
    }
}
