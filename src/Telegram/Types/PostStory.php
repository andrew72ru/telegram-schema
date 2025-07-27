<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Posts a new story on behalf of a chat; requires can_post_stories right for supergroup and channel chats. Returns a temporary story.
 */
class PostStory extends Story implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that will post the story. Pass Saved Messages chat identifier when posting a story on behalf of the current user */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Content of the story */
        #[SerializedName('content')]
        private InputStoryContent|null $content = null,
        /** Clickable rectangle areas to be shown on the story media; pass null if none */
        #[SerializedName('areas')]
        private InputStoryAreas|null $areas = null,
        /** Story caption; pass null to use an empty caption; 0-getOption("story_caption_length_max") characters; can have entities only if getOption("can_use_text_entities_in_story_caption") */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** The privacy settings for the story; ignored for stories posted on behalf of supergroup and channel chats */
        #[SerializedName('privacy_settings')]
        private StoryPrivacySettings|null $privacySettings = null,
        /** Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise */
        #[SerializedName('active_period')]
        private int $activePeriod,
        /** Full identifier of the original story, which content was used to create the story; pass null if the story isn't repost of another story */
        #[SerializedName('from_story_full_id')]
        private StoryFullId|null $fromStoryFullId = null,
        /** Pass true to keep the story accessible after expiration */
        #[SerializedName('is_posted_to_chat_page')]
        private bool $isPostedToChatPage,
        /** Pass true if the content of the story must be protected from forwarding and screenshotting */
        #[SerializedName('protect_content')]
        private bool $protectContent,
    ) {
    }

    /**
     * Get Identifier of the chat that will post the story. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat that will post the story. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Content of the story.
     */
    public function getContent(): InputStoryContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the story.
     */
    public function setContent(InputStoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Clickable rectangle areas to be shown on the story media; pass null if none.
     */
    public function getAreas(): InputStoryAreas|null
    {
        return $this->areas;
    }

    /**
     * Set Clickable rectangle areas to be shown on the story media; pass null if none.
     */
    public function setAreas(InputStoryAreas|null $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    /**
     * Get Story caption; pass null to use an empty caption; 0-getOption("story_caption_length_max") characters; can have entities only if getOption("can_use_text_entities_in_story_caption").
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Story caption; pass null to use an empty caption; 0-getOption("story_caption_length_max") characters; can have entities only if getOption("can_use_text_entities_in_story_caption").
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get The privacy settings for the story; ignored for stories posted on behalf of supergroup and channel chats.
     */
    public function getPrivacySettings(): StoryPrivacySettings|null
    {
        return $this->privacySettings;
    }

    /**
     * Set The privacy settings for the story; ignored for stories posted on behalf of supergroup and channel chats.
     */
    public function setPrivacySettings(StoryPrivacySettings|null $privacySettings): self
    {
        $this->privacySettings = $privacySettings;

        return $this;
    }

    /**
     * Get Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise.
     */
    public function getActivePeriod(): int
    {
        return $this->activePeriod;
    }

    /**
     * Set Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise.
     */
    public function setActivePeriod(int $activePeriod): self
    {
        $this->activePeriod = $activePeriod;

        return $this;
    }

    /**
     * Get Full identifier of the original story, which content was used to create the story; pass null if the story isn't repost of another story.
     */
    public function getFromStoryFullId(): StoryFullId|null
    {
        return $this->fromStoryFullId;
    }

    /**
     * Set Full identifier of the original story, which content was used to create the story; pass null if the story isn't repost of another story.
     */
    public function setFromStoryFullId(StoryFullId|null $fromStoryFullId): self
    {
        $this->fromStoryFullId = $fromStoryFullId;

        return $this;
    }

    /**
     * Get Pass true to keep the story accessible after expiration.
     */
    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    /**
     * Set Pass true to keep the story accessible after expiration.
     */
    public function setIsPostedToChatPage(bool $isPostedToChatPage): self
    {
        $this->isPostedToChatPage = $isPostedToChatPage;

        return $this;
    }

    /**
     * Get Pass true if the content of the story must be protected from forwarding and screenshotting.
     */
    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    /**
     * Set Pass true if the content of the story must be protected from forwarding and screenshotting.
     */
    public function setProtectContent(bool $protectContent): self
    {
        $this->protectContent = $protectContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'postStory',
            'chat_id' => $this->getChatId(),
            'content' => $this->getContent(),
            'areas' => $this->getAreas(),
            'caption' => $this->getCaption(),
            'privacy_settings' => $this->getPrivacySettings(),
            'active_period' => $this->getActivePeriod(),
            'from_story_full_id' => $this->getFromStoryFullId(),
            'is_posted_to_chat_page' => $this->getIsPostedToChatPage(),
            'protect_content' => $this->getProtectContent(),
        ];
    }
}
