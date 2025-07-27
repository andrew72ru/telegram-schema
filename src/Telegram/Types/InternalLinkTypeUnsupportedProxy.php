<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is a link to an unsupported proxy. An alert can be shown to the user.
 */
class InternalLinkTypeUnsupportedProxy extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeUnsupportedProxy',
        ];
    }
}
