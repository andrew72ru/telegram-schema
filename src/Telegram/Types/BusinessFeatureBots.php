<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to connect a bot to the account.
 */
class BusinessFeatureBots extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureBots',
        ];
    }
}
