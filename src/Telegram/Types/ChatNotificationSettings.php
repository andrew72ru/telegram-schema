<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about notification settings for a chat or a forum topic
 */
class ChatNotificationSettings implements \JsonSerializable
{
    public function __construct(
        /** If true, the value for the relevant type of chat or the forum chat is used instead of mute_for */
        #[SerializedName('use_default_mute_for')]
        private bool $useDefaultMuteFor,
        /** Time left before notifications will be unmuted, in seconds */
        #[SerializedName('mute_for')]
        private int $muteFor,
        /** If true, the value for the relevant type of chat or the forum chat is used instead of sound_id */
        #[SerializedName('use_default_sound')]
        private bool $useDefaultSound,
        /** Identifier of the notification sound to be played for messages; 0 if sound is disabled */
        #[SerializedName('sound_id')]
        private int $soundId,
        /** If true, the value for the relevant type of chat or the forum chat is used instead of show_preview */
        #[SerializedName('use_default_show_preview')]
        private bool $useDefaultShowPreview,
        /** True, if message content must be displayed in notifications */
        #[SerializedName('show_preview')]
        private bool $showPreview,
        /** If true, the value for the relevant type of chat is used instead of mute_stories */
        #[SerializedName('use_default_mute_stories')]
        private bool $useDefaultMuteStories,
        /** True, if story notifications are disabled for the chat */
        #[SerializedName('mute_stories')]
        private bool $muteStories,
        /** If true, the value for the relevant type of chat is used instead of story_sound_id */
        #[SerializedName('use_default_story_sound')]
        private bool $useDefaultStorySound,
        /** Identifier of the notification sound to be played for stories; 0 if sound is disabled */
        #[SerializedName('story_sound_id')]
        private int $storySoundId,
        /** If true, the value for the relevant type of chat is used instead of show_story_poster */
        #[SerializedName('use_default_show_story_poster')]
        private bool $useDefaultShowStoryPoster,
        /** True, if the chat that posted a story must be displayed in notifications */
        #[SerializedName('show_story_poster')]
        private bool $showStoryPoster,
        /** If true, the value for the relevant type of chat or the forum chat is used instead of disable_pinned_message_notifications */
        #[SerializedName('use_default_disable_pinned_message_notifications')]
        private bool $useDefaultDisablePinnedMessageNotifications,
        /** If true, notifications for incoming pinned messages will be created as for an ordinary unread message */
        #[SerializedName('disable_pinned_message_notifications')]
        private bool $disablePinnedMessageNotifications,
        /** If true, the value for the relevant type of chat or the forum chat is used instead of disable_mention_notifications */
        #[SerializedName('use_default_disable_mention_notifications')]
        private bool $useDefaultDisableMentionNotifications,
        /** If true, notifications for messages with mentions will be created as for an ordinary unread message */
        #[SerializedName('disable_mention_notifications')]
        private bool $disableMentionNotifications,
    ) {
    }

    /**
     * Get If true, the value for the relevant type of chat or the forum chat is used instead of mute_for
     */
    public function getUseDefaultMuteFor(): bool
    {
        return $this->useDefaultMuteFor;
    }

    /**
     * Set If true, the value for the relevant type of chat or the forum chat is used instead of mute_for
     */
    public function setUseDefaultMuteFor(bool $useDefaultMuteFor): self
    {
        $this->useDefaultMuteFor = $useDefaultMuteFor;

        return $this;
    }

    /**
     * Get Time left before notifications will be unmuted, in seconds
     */
    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    /**
     * Set Time left before notifications will be unmuted, in seconds
     */
    public function setMuteFor(int $muteFor): self
    {
        $this->muteFor = $muteFor;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat or the forum chat is used instead of sound_id
     */
    public function getUseDefaultSound(): bool
    {
        return $this->useDefaultSound;
    }

    /**
     * Set If true, the value for the relevant type of chat or the forum chat is used instead of sound_id
     */
    public function setUseDefaultSound(bool $useDefaultSound): self
    {
        $this->useDefaultSound = $useDefaultSound;

        return $this;
    }

    /**
     * Get Identifier of the notification sound to be played for messages; 0 if sound is disabled
     */
    public function getSoundId(): int
    {
        return $this->soundId;
    }

    /**
     * Set Identifier of the notification sound to be played for messages; 0 if sound is disabled
     */
    public function setSoundId(int $soundId): self
    {
        $this->soundId = $soundId;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat or the forum chat is used instead of show_preview
     */
    public function getUseDefaultShowPreview(): bool
    {
        return $this->useDefaultShowPreview;
    }

    /**
     * Set If true, the value for the relevant type of chat or the forum chat is used instead of show_preview
     */
    public function setUseDefaultShowPreview(bool $useDefaultShowPreview): self
    {
        $this->useDefaultShowPreview = $useDefaultShowPreview;

        return $this;
    }

    /**
     * Get True, if message content must be displayed in notifications
     */
    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    /**
     * Set True, if message content must be displayed in notifications
     */
    public function setShowPreview(bool $showPreview): self
    {
        $this->showPreview = $showPreview;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat is used instead of mute_stories
     */
    public function getUseDefaultMuteStories(): bool
    {
        return $this->useDefaultMuteStories;
    }

    /**
     * Set If true, the value for the relevant type of chat is used instead of mute_stories
     */
    public function setUseDefaultMuteStories(bool $useDefaultMuteStories): self
    {
        $this->useDefaultMuteStories = $useDefaultMuteStories;

        return $this;
    }

    /**
     * Get True, if story notifications are disabled for the chat
     */
    public function getMuteStories(): bool
    {
        return $this->muteStories;
    }

    /**
     * Set True, if story notifications are disabled for the chat
     */
    public function setMuteStories(bool $muteStories): self
    {
        $this->muteStories = $muteStories;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat is used instead of story_sound_id
     */
    public function getUseDefaultStorySound(): bool
    {
        return $this->useDefaultStorySound;
    }

    /**
     * Set If true, the value for the relevant type of chat is used instead of story_sound_id
     */
    public function setUseDefaultStorySound(bool $useDefaultStorySound): self
    {
        $this->useDefaultStorySound = $useDefaultStorySound;

        return $this;
    }

    /**
     * Get Identifier of the notification sound to be played for stories; 0 if sound is disabled
     */
    public function getStorySoundId(): int
    {
        return $this->storySoundId;
    }

    /**
     * Set Identifier of the notification sound to be played for stories; 0 if sound is disabled
     */
    public function setStorySoundId(int $storySoundId): self
    {
        $this->storySoundId = $storySoundId;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat is used instead of show_story_poster
     */
    public function getUseDefaultShowStoryPoster(): bool
    {
        return $this->useDefaultShowStoryPoster;
    }

    /**
     * Set If true, the value for the relevant type of chat is used instead of show_story_poster
     */
    public function setUseDefaultShowStoryPoster(bool $useDefaultShowStoryPoster): self
    {
        $this->useDefaultShowStoryPoster = $useDefaultShowStoryPoster;

        return $this;
    }

    /**
     * Get True, if the chat that posted a story must be displayed in notifications
     */
    public function getShowStoryPoster(): bool
    {
        return $this->showStoryPoster;
    }

    /**
     * Set True, if the chat that posted a story must be displayed in notifications
     */
    public function setShowStoryPoster(bool $showStoryPoster): self
    {
        $this->showStoryPoster = $showStoryPoster;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat or the forum chat is used instead of disable_pinned_message_notifications
     */
    public function getUseDefaultDisablePinnedMessageNotifications(): bool
    {
        return $this->useDefaultDisablePinnedMessageNotifications;
    }

    /**
     * Set If true, the value for the relevant type of chat or the forum chat is used instead of disable_pinned_message_notifications
     */
    public function setUseDefaultDisablePinnedMessageNotifications(
        bool $useDefaultDisablePinnedMessageNotifications,
    ): self {
        $this->useDefaultDisablePinnedMessageNotifications = $useDefaultDisablePinnedMessageNotifications;

        return $this;
    }

    /**
     * Get If true, notifications for incoming pinned messages will be created as for an ordinary unread message
     */
    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    /**
     * Set If true, notifications for incoming pinned messages will be created as for an ordinary unread message
     */
    public function setDisablePinnedMessageNotifications(bool $disablePinnedMessageNotifications): self
    {
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;

        return $this;
    }

    /**
     * Get If true, the value for the relevant type of chat or the forum chat is used instead of disable_mention_notifications
     */
    public function getUseDefaultDisableMentionNotifications(): bool
    {
        return $this->useDefaultDisableMentionNotifications;
    }

    /**
     * Set If true, the value for the relevant type of chat or the forum chat is used instead of disable_mention_notifications
     */
    public function setUseDefaultDisableMentionNotifications(bool $useDefaultDisableMentionNotifications): self
    {
        $this->useDefaultDisableMentionNotifications = $useDefaultDisableMentionNotifications;

        return $this;
    }

    /**
     * Get If true, notifications for messages with mentions will be created as for an ordinary unread message
     */
    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }

    /**
     * Set If true, notifications for messages with mentions will be created as for an ordinary unread message
     */
    public function setDisableMentionNotifications(bool $disableMentionNotifications): self
    {
        $this->disableMentionNotifications = $disableMentionNotifications;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatNotificationSettings',
            'use_default_mute_for' => $this->getUseDefaultMuteFor(),
            'mute_for' => $this->getMuteFor(),
            'use_default_sound' => $this->getUseDefaultSound(),
            'sound_id' => $this->getSoundId(),
            'use_default_show_preview' => $this->getUseDefaultShowPreview(),
            'show_preview' => $this->getShowPreview(),
            'use_default_mute_stories' => $this->getUseDefaultMuteStories(),
            'mute_stories' => $this->getMuteStories(),
            'use_default_story_sound' => $this->getUseDefaultStorySound(),
            'story_sound_id' => $this->getStorySoundId(),
            'use_default_show_story_poster' => $this->getUseDefaultShowStoryPoster(),
            'show_story_poster' => $this->getShowStoryPoster(),
            'use_default_disable_pinned_message_notifications' => $this->getUseDefaultDisablePinnedMessageNotifications(),
            'disable_pinned_message_notifications' => $this->getDisablePinnedMessageNotifications(),
            'use_default_disable_mention_notifications' => $this->getUseDefaultDisableMentionNotifications(),
            'disable_mention_notifications' => $this->getDisableMentionNotifications(),
        ];
    }
}
