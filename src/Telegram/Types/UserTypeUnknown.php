<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * No information on the user besides the user identifier is available, yet this user has not been deleted. This object is extremely rare and must be handled like a deleted user. It is not possible to perform any actions on users of this type
 */
class UserTypeUnknown extends UserType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userTypeUnknown',
        ];
    }
}
