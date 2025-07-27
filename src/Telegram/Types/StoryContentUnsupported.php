<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A story content that is not supported in the current TDLib version.
 */
class StoryContentUnsupported extends StoryContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyContentUnsupported',
        ];
    }
}
