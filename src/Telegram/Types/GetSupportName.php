<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns localized name of the Telegram support user; for Telegram support only
 */
class GetSupportName extends Text implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSupportName',
        ];
    }
}
