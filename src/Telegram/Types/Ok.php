<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An object of this type is returned on a successful function call for certain functions
 */
class Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'ok',
        ];
    }
}
