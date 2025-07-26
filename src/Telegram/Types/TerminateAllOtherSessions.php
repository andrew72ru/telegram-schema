<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Terminates all other sessions of the current user
 */
class TerminateAllOtherSessions extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'terminateAllOtherSessions',
        ];
    }
}
