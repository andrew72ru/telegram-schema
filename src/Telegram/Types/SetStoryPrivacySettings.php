<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes privacy settings of a story. The method can be called only for stories posted on behalf of the current user and if story.can_be_edited == true
 */
class SetStoryPrivacySettings extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
        /** The new privacy settings for the story */
        #[SerializedName('privacy_settings')]
        private StoryPrivacySettings|null $privacySettings = null,
    ) {
    }

    /**
     * Get Identifier of the story
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Identifier of the story
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get The new privacy settings for the story
     */
    public function getPrivacySettings(): StoryPrivacySettings|null
    {
        return $this->privacySettings;
    }

    /**
     * Set The new privacy settings for the story
     */
    public function setPrivacySettings(StoryPrivacySettings|null $privacySettings): self
    {
        $this->privacySettings = $privacySettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStoryPrivacySettings',
            'story_id' => $this->getStoryId(),
            'privacy_settings' => $this->getPrivacySettings(),
        ];
    }
}
