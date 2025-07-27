<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A deleted user or deleted bot. No information on the user besides the user identifier is available. It is not possible to perform any active actions on this type of user.
 */
class UserTypeDeleted extends UserType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userTypeDeleted',
        ];
    }
}
