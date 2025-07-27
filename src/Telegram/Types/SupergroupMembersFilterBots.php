<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns bot members of the supergroup or channel.
 */
class SupergroupMembersFilterBots extends SupergroupMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupMembersFilterBots',
        ];
    }
}
