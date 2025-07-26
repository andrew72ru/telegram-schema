<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Quickly returns approximate storage usage statistics. Can be called before authorization
 */
class GetStorageStatisticsFast extends StorageStatisticsFast implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStorageStatisticsFast',
        ];
    }
}
