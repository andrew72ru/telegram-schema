<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Checks whether the current session can be used to transfer a chat ownership to another user.
 */
class CanTransferOwnership extends CanTransferOwnershipResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canTransferOwnership',
        ];
    }
}
