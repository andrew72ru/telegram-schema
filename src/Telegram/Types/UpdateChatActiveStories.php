<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of active stories posted by a specific chat has changed.
 */
class UpdateChatActiveStories extends Update implements \JsonSerializable
{
    public function __construct(
        /** The new list of active stories */
        #[SerializedName('active_stories')]
        private ChatActiveStories|null $activeStories = null,
    ) {
    }

    /**
     * Get The new list of active stories.
     */
    public function getActiveStories(): ChatActiveStories|null
    {
        return $this->activeStories;
    }

    /**
     * Set The new list of active stories.
     */
    public function setActiveStories(ChatActiveStories|null $activeStories): self
    {
        $this->activeStories = $activeStories;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatActiveStories',
            'active_stories' => $this->getActiveStories(),
        ];
    }
}
