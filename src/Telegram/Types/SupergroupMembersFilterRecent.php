<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns recently active users in reverse chronological order.
 */
class SupergroupMembersFilterRecent extends SupergroupMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupMembersFilterRecent',
        ];
    }
}
