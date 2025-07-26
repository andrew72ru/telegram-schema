<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the default message auto-delete timer settings section of the application settings
 */
class InternalLinkTypeDefaultMessageAutoDeleteTimerSettings extends InternalLinkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeDefaultMessageAutoDeleteTimerSettings',
        ];
    }
}
