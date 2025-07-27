<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns a user that can be contacted to get support.
 */
class GetSupportUser extends User implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSupportUser',
        ];
    }
}
