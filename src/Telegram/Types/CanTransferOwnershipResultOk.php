<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The session can be used
 */
class CanTransferOwnershipResultOk extends CanTransferOwnershipResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canTransferOwnershipResultOk',
        ];
    }
}
