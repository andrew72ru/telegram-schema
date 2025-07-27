<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the owner and administrators.
 */
class SupergroupMembersFilterAdministrators extends SupergroupMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'supergroupMembersFilterAdministrators',
        ];
    }
}
