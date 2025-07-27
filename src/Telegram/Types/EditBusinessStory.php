<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes a story posted by the bot on behalf of a business account; for bots only.
 */
class EditBusinessStory extends Story implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Identifier of the story to edit */
        #[SerializedName('story_id')]
        private int $storyId,
        /** New content of the story */
        #[SerializedName('content')]
        private InputStoryContent|null $content = null,
        /** New clickable rectangle areas to be shown on the story media */
        #[SerializedName('areas')]
        private InputStoryAreas|null $areas = null,
        /** New story caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** The new privacy settings for the story */
        #[SerializedName('privacy_settings')]
        private StoryPrivacySettings|null $privacySettings = null,
    ) {
    }

    /**
     * Get Identifier of the chat that posted the story.
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set Identifier of the chat that posted the story.
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get Identifier of the story to edit.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Identifier of the story to edit.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get New content of the story.
     */
    public function getContent(): InputStoryContent|null
    {
        return $this->content;
    }

    /**
     * Set New content of the story.
     */
    public function setContent(InputStoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get New clickable rectangle areas to be shown on the story media.
     */
    public function getAreas(): InputStoryAreas|null
    {
        return $this->areas;
    }

    /**
     * Set New clickable rectangle areas to be shown on the story media.
     */
    public function setAreas(InputStoryAreas|null $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get New story caption.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set New story caption.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get The new privacy settings for the story.
     */
    public function getPrivacySettings(): StoryPrivacySettings|null
    {
        return $this->privacySettings;
    }

    /**
     * Set The new privacy settings for the story.
     */
    public function setPrivacySettings(StoryPrivacySettings|null $privacySettings): self
    {
        $this->privacySettings = $privacySettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBusinessStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'content' => $this->getContent(),
            'areas' => $this->getAreas(),
            'caption' => $this->getCaption(),
            'privacy_settings' => $this->getPrivacySettings(),
        ];
    }
}
