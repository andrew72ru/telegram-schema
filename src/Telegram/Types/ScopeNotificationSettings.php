<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about notification settings for several chats
 */
class ScopeNotificationSettings implements \JsonSerializable
{
    public function __construct(
        /** Time left before notifications will be unmuted, in seconds */
        #[SerializedName('mute_for')]
        private int $muteFor,
        /** Identifier of the notification sound to be played; 0 if sound is disabled */
        #[SerializedName('sound_id')]
        private int $soundId,
        /** True, if message content must be displayed in notifications */
        #[SerializedName('show_preview')]
        private bool $showPreview,
        /** If true, story notifications are received only for the first 5 chats from topChatCategoryUsers regardless of the value of mute_stories */
        #[SerializedName('use_default_mute_stories')]
        private bool $useDefaultMuteStories,
        /** True, if story notifications are disabled */
        #[SerializedName('mute_stories')]
        private bool $muteStories,
        /** Identifier of the notification sound to be played for stories; 0 if sound is disabled */
        #[SerializedName('story_sound_id')]
        private int $storySoundId,
        /** True, if the chat that posted a story must be displayed in notifications */
        #[SerializedName('show_story_poster')]
        private bool $showStoryPoster,
        /** True, if notifications for incoming pinned messages will be created as for an ordinary unread message */
        #[SerializedName('disable_pinned_message_notifications')]
        private bool $disablePinnedMessageNotifications,
        /** True, if notifications for messages with mentions will be created as for an ordinary unread message */
        #[SerializedName('disable_mention_notifications')]
        private bool $disableMentionNotifications,
    ) {
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
     * Get Identifier of the notification sound to be played; 0 if sound is disabled
     */
    public function getSoundId(): int
    {
        return $this->soundId;
    }

    /**
     * Set Identifier of the notification sound to be played; 0 if sound is disabled
     */
    public function setSoundId(int $soundId): self
    {
        $this->soundId = $soundId;

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
     * Get If true, story notifications are received only for the first 5 chats from topChatCategoryUsers regardless of the value of mute_stories
     */
    public function getUseDefaultMuteStories(): bool
    {
        return $this->useDefaultMuteStories;
    }

    /**
     * Set If true, story notifications are received only for the first 5 chats from topChatCategoryUsers regardless of the value of mute_stories
     */
    public function setUseDefaultMuteStories(bool $useDefaultMuteStories): self
    {
        $this->useDefaultMuteStories = $useDefaultMuteStories;

        return $this;
    }

    /**
     * Get True, if story notifications are disabled
     */
    public function getMuteStories(): bool
    {
        return $this->muteStories;
    }

    /**
     * Set True, if story notifications are disabled
     */
    public function setMuteStories(bool $muteStories): self
    {
        $this->muteStories = $muteStories;

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
     * Get True, if notifications for incoming pinned messages will be created as for an ordinary unread message
     */
    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    /**
     * Set True, if notifications for incoming pinned messages will be created as for an ordinary unread message
     */
    public function setDisablePinnedMessageNotifications(bool $disablePinnedMessageNotifications): self
    {
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;

        return $this;
    }

    /**
     * Get True, if notifications for messages with mentions will be created as for an ordinary unread message
     */
    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }

    /**
     * Set True, if notifications for messages with mentions will be created as for an ordinary unread message
     */
    public function setDisableMentionNotifications(bool $disableMentionNotifications): self
    {
        $this->disableMentionNotifications = $disableMentionNotifications;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'scopeNotificationSettings',
            'mute_for' => $this->getMuteFor(),
            'sound_id' => $this->getSoundId(),
            'show_preview' => $this->getShowPreview(),
            'use_default_mute_stories' => $this->getUseDefaultMuteStories(),
            'mute_stories' => $this->getMuteStories(),
            'story_sound_id' => $this->getStorySoundId(),
            'show_story_poster' => $this->getShowStoryPoster(),
            'disable_pinned_message_notifications' => $this->getDisablePinnedMessageNotifications(),
            'disable_mention_notifications' => $this->getDisableMentionNotifications(),
        ];
    }
}
