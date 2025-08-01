<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The list of stories, shown in the Arvhive chat list.
 */
class StoryListArchive extends StoryList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyListArchive',
        ];
    }
}
