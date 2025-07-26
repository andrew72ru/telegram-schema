<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The mask is placed relatively to the eyes
 */
class MaskPointEyes extends MaskPoint implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'maskPointEyes',
        ];
    }
}
