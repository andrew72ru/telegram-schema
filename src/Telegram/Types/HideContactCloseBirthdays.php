<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Hides the list of contacts that have close birthdays for 24 hours
 */
class HideContactCloseBirthdays extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'hideContactCloseBirthdays',
        ];
    }
}
