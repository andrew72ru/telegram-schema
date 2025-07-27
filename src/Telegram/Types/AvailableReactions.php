<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of reactions that can be added to a message.
 */
class AvailableReactions implements \JsonSerializable
{
    public function __construct(
        /** List of reactions to be shown at the top */
        #[SerializedName('top_reactions')]
        private array|null $topReactions = null,
        /** List of recently used reactions */
        #[SerializedName('recent_reactions')]
        private array|null $recentReactions = null,
        /** List of popular reactions */
        #[SerializedName('popular_reactions')]
        private array|null $popularReactions = null,
        /** True, if any custom emoji reaction can be added by Telegram Premium subscribers */
        #[SerializedName('allow_custom_emoji')]
        private bool $allowCustomEmoji,
        /** True, if the reactions will be tags and the message can be found by them */
        #[SerializedName('are_tags')]
        private bool $areTags,
        /** The reason why the current user can't add reactions to the message, despite some other users can; may be null if none */
        #[SerializedName('unavailability_reason')]
        private ReactionUnavailabilityReason|null $unavailabilityReason = null,
    ) {
    }

    /**
     * Get List of reactions to be shown at the top.
     */
    public function getTopReactions(): array|null
    {
        return $this->topReactions;
    }

    /**
     * Set List of reactions to be shown at the top.
     */
    public function setTopReactions(array|null $topReactions): self
    {
        $this->topReactions = $topReactions;

        return $this;
    }

    /**
     * Get List of recently used reactions.
     */
    public function getRecentReactions(): array|null
    {
        return $this->recentReactions;
    }

    /**
     * Set List of recently used reactions.
     */
    public function setRecentReactions(array|null $recentReactions): self
    {
        $this->recentReactions = $recentReactions;

        return $this;
    }

    /**
     * Get List of popular reactions.
     */
    public function getPopularReactions(): array|null
    {
        return $this->popularReactions;
    }

    /**
     * Set List of popular reactions.
     */
    public function setPopularReactions(array|null $popularReactions): self
    {
        $this->popularReactions = $popularReactions;

        return $this;
    }

    /**
     * Get True, if any custom emoji reaction can be added by Telegram Premium subscribers.
     */
    public function getAllowCustomEmoji(): bool
    {
        return $this->allowCustomEmoji;
    }

    /**
     * Set True, if any custom emoji reaction can be added by Telegram Premium subscribers.
     */
    public function setAllowCustomEmoji(bool $allowCustomEmoji): self
    {
        $this->allowCustomEmoji = $allowCustomEmoji;

        return $this;
    }

    /**
     * Get True, if the reactions will be tags and the message can be found by them.
     */
    public function getAreTags(): bool
    {
        return $this->areTags;
    }

    /**
     * Set True, if the reactions will be tags and the message can be found by them.
     */
    public function setAreTags(bool $areTags): self
    {
        $this->areTags = $areTags;

        return $this;
    }

    /**
     * Get The reason why the current user can't add reactions to the message, despite some other users can; may be null if none.
     */
    public function getUnavailabilityReason(): ReactionUnavailabilityReason|null
    {
        return $this->unavailabilityReason;
    }

    /**
     * Set The reason why the current user can't add reactions to the message, despite some other users can; may be null if none.
     */
    public function setUnavailabilityReason(ReactionUnavailabilityReason|null $unavailabilityReason): self
    {
        $this->unavailabilityReason = $unavailabilityReason;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'availableReactions',
            'top_reactions' => $this->getTopReactions(),
            'recent_reactions' => $this->getRecentReactions(),
            'popular_reactions' => $this->getPopularReactions(),
            'allow_custom_emoji' => $this->getAllowCustomEmoji(),
            'are_tags' => $this->getAreTags(),
            'unavailability_reason' => $this->getUnavailabilityReason(),
        ];
    }
}
