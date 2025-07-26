<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns up to 20 recently used inline bots in the order of their last usage
 */
class GetRecentInlineBots extends Users implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecentInlineBots',
        ];
    }
}
