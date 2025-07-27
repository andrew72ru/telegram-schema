<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The list of stories, shown in the main chat list and folder chat lists.
 */
class StoryListMain extends StoryList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyListMain',
        ];
    }
}
