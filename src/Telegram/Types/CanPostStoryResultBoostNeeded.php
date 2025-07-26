<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat must be boosted first by Telegram Premium subscribers to post more stories. Call getChatBoostStatus to get current boost status of the chat
 */
class CanPostStoryResultBoostNeeded extends CanPostStoryResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStoryResultBoostNeeded',
        ];
    }
}
