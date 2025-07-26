<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the screen with information about Telegram Star balance and transactions of the current user
 */
class InternalLinkTypeMyStars extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeMyStars',
        ];
    }
}
