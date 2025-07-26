<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the Devices section of the application. Use getActiveSessions to get the list of active sessions and show them to the user
 */
class InternalLinkTypeActiveSessions extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeActiveSessions',
        ];
    }
}
