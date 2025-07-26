<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of chats with non-default notification settings for stories
 */
class GetStoryNotificationSettingsExceptions extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStoryNotificationSettingsExceptions',
        ];
    }
}
