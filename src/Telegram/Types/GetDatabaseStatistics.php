<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns database statistics
 */
class GetDatabaseStatistics extends DatabaseStatistics implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDatabaseStatistics',
        ];
    }
}
