<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Closes the TDLib instance, destroying all local data without a proper logout. The current user session will remain in the list of all active sessions. All local data will be destroyed.
 */
class Destroy extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'destroy',
        ];
    }
}
