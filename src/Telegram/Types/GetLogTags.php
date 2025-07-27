<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of available TDLib internal log tags, for example, ["actor", "binlog", "connections", "notifications", "proxy"]. Can be called synchronously.
 */
class GetLogTags extends LogTags implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLogTags',
        ];
    }
}
