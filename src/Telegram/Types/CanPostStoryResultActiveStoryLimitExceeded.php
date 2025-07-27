<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The limit for the number of active stories exceeded. The user can buy Telegram Premium, delete an active story, or wait for the oldest story to expire.
 */
class CanPostStoryResultActiveStoryLimitExceeded extends CanPostStoryResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStoryResultActiveStoryLimitExceeded',
        ];
    }
}
