<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The 2-step verification needs to be enabled first.
 */
class CanTransferOwnershipResultPasswordNeeded extends CanTransferOwnershipResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canTransferOwnershipResultPasswordNeeded',
        ];
    }
}
