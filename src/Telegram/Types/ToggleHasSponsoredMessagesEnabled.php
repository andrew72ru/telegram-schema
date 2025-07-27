<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether the current user has sponsored messages enabled. The setting has no effect for users without Telegram Premium for which sponsored messages are always enabled.
 */
class ToggleHasSponsoredMessagesEnabled extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Pass true to enable sponsored messages for the current user; false to disable them */
        #[SerializedName('has_sponsored_messages_enabled')]
        private bool $hasSponsoredMessagesEnabled,
    ) {
    }

    /**
     * Get Pass true to enable sponsored messages for the current user; false to disable them.
     */
    public function getHasSponsoredMessagesEnabled(): bool
    {
        return $this->hasSponsoredMessagesEnabled;
    }

    /**
     * Set Pass true to enable sponsored messages for the current user; false to disable them.
     */
    public function setHasSponsoredMessagesEnabled(bool $hasSponsoredMessagesEnabled): self
    {
        $this->hasSponsoredMessagesEnabled = $hasSponsoredMessagesEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleHasSponsoredMessagesEnabled',
            'has_sponsored_messages_enabled' => $this->getHasSponsoredMessagesEnabled(),
        ];
    }
}
