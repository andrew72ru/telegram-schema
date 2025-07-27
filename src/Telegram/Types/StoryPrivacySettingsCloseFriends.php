<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The story can be viewed by all close friends.
 */
class StoryPrivacySettingsCloseFriends extends StoryPrivacySettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyPrivacySettingsCloseFriends',
        ];
    }
}
