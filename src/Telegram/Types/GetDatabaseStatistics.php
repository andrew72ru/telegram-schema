<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns database statistics.
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
