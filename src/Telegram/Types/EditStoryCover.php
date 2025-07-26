<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes cover of a video story. Can be called only if story.can_be_edited == true and the story isn't being edited now
 */
class EditStoryCover extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Identifier of the story to edit */
        #[SerializedName('story_id')]
        private int $storyId,
        /** New timestamp of the frame, which will be used as video thumbnail */
        #[SerializedName('cover_frame_timestamp')]
        private float $coverFrameTimestamp,
    ) {
    }

    /**
     * Get Identifier of the chat that posted the story
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set Identifier of the chat that posted the story
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get Identifier of the story to edit
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Identifier of the story to edit
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get New timestamp of the frame, which will be used as video thumbnail
     */
    public function getCoverFrameTimestamp(): float
    {
        return $this->coverFrameTimestamp;
    }

    /**
     * Set New timestamp of the frame, which will be used as video thumbnail
     */
    public function setCoverFrameTimestamp(float $coverFrameTimestamp): self
    {
        $this->coverFrameTimestamp = $coverFrameTimestamp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editStoryCover',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'cover_frame_timestamp' => $this->getCoverFrameTimestamp(),
        ];
    }
}
