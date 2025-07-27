<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about notification settings for reactions.
 */
class ReactionNotificationSettings implements \JsonSerializable
{
    public function __construct(
        /** Source of message reactions for which notifications are shown */
        #[SerializedName('message_reaction_source')]
        private ReactionNotificationSource|null $messageReactionSource = null,
        /** Source of story reactions for which notifications are shown */
        #[SerializedName('story_reaction_source')]
        private ReactionNotificationSource|null $storyReactionSource = null,
        /** Identifier of the notification sound to be played; 0 if sound is disabled */
        #[SerializedName('sound_id')]
        private int $soundId,
        /** True, if reaction sender and emoji must be displayed in notifications */
        #[SerializedName('show_preview')]
        private bool $showPreview,
    ) {
    }

    /**
     * Get Source of message reactions for which notifications are shown.
     */
    public function getMessageReactionSource(): ReactionNotificationSource|null
    {
        return $this->messageReactionSource;
    }

    /**
     * Set Source of message reactions for which notifications are shown.
     */
    public function setMessageReactionSource(ReactionNotificationSource|null $messageReactionSource): self
    {
        $this->messageReactionSource = $messageReactionSource;

        return $this;
    }

    /**
     * Get Source of story reactions for which notifications are shown.
     */
    public function getStoryReactionSource(): ReactionNotificationSource|null
    {
        return $this->storyReactionSource;
    }

    /**
     * Set Source of story reactions for which notifications are shown.
     */
    public function setStoryReactionSource(ReactionNotificationSource|null $storyReactionSource): self
    {
        $this->storyReactionSource = $storyReactionSource;

        return $this;
    }

    /**
     * Get Identifier of the notification sound to be played; 0 if sound is disabled.
     */
    public function getSoundId(): int
    {
        return $this->soundId;
    }

    /**
     * Set Identifier of the notification sound to be played; 0 if sound is disabled.
     */
    public function setSoundId(int $soundId): self
    {
        $this->soundId = $soundId;

        return $this;
    }

    /**
     * Get True, if reaction sender and emoji must be displayed in notifications.
     */
    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    /**
     * Set True, if reaction sender and emoji must be displayed in notifications.
     */
    public function setShowPreview(bool $showPreview): self
    {
        $this->showPreview = $showPreview;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionNotificationSettings',
            'message_reaction_source' => $this->getMessageReactionSource(),
            'story_reaction_source' => $this->getStoryReactionSource(),
            'sound_id' => $this->getSoundId(),
            'show_preview' => $this->getShowPreview(),
        ];
    }
}
