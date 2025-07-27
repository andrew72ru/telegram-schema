<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Activates stealth mode for stories, which hides all views of stories from the current user in the last "story_stealth_mode_past_period" seconds.
 */
class ActivateStoryStealthMode extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'activateStoryStealthMode',
        ];
    }
}
