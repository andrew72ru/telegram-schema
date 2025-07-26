<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes content and caption of a story. Can be called only if story.can_be_edited == true
 */
class EditStory extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Identifier of the story to edit */
        #[SerializedName('story_id')]
        private int $storyId,
        /** New content of the story; pass null to keep the current content */
        #[SerializedName('content')]
        private InputStoryContent|null $content = null,
        /** New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed */
        #[SerializedName('areas')]
        private InputStoryAreas|null $areas = null,
        /** New story caption; pass null to keep the current caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
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
     * Get New content of the story; pass null to keep the current content
     */
    public function getContent(): InputStoryContent|null
    {
        return $this->content;
    }

    /**
     * Set New content of the story; pass null to keep the current content
     */
    public function setContent(InputStoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed
     */
    public function getAreas(): InputStoryAreas|null
    {
        return $this->areas;
    }

    /**
     * Set New clickable rectangle areas to be shown on the story media; pass null to keep the current areas. Areas can't be edited if story content isn't changed
     */
    public function setAreas(InputStoryAreas|null $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get New story caption; pass null to keep the current caption
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set New story caption; pass null to keep the current caption
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'content' => $this->getContent(),
            'areas' => $this->getAreas(),
            'caption' => $this->getCaption(),
        ];
    }
}
