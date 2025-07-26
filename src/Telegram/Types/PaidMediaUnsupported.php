<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The media is unsupported
 */
class PaidMediaUnsupported extends PaidMedia implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paidMediaUnsupported',
        ];
    }
}
