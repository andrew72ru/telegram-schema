<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether sponsored messages are shown in the channel chat; requires owner privileges in the channel. The chat must have at least chatBoostFeatures.min_sponsored_message_disable_boost_level boost level to disable sponsored messages.
 */
class ToggleSupergroupCanHaveSponsoredMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The new value of can_have_sponsored_messages */
        #[SerializedName('can_have_sponsored_messages')]
        private bool $canHaveSponsoredMessages,
    ) {
    }

    /**
     * Get The identifier of the channel.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set The identifier of the channel.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The new value of can_have_sponsored_messages.
     */
    public function getCanHaveSponsoredMessages(): bool
    {
        return $this->canHaveSponsoredMessages;
    }

    /**
     * Set The new value of can_have_sponsored_messages.
     */
    public function setCanHaveSponsoredMessages(bool $canHaveSponsoredMessages): self
    {
        $this->canHaveSponsoredMessages = $canHaveSponsoredMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupCanHaveSponsoredMessages',
            'supergroup_id' => $this->getSupergroupId(),
            'can_have_sponsored_messages' => $this->getCanHaveSponsoredMessages(),
        ];
    }
}
