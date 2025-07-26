<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether aggressive anti-spam checks are enabled in the supergroup. Can be called only if supergroupFullInfo.can_toggle_aggressive_anti_spam == true
 */
class ToggleSupergroupHasAggressiveAntiSpamEnabled extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the supergroup, which isn't a broadcast group */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The new value of has_aggressive_anti_spam_enabled */
        #[SerializedName('has_aggressive_anti_spam_enabled')]
        private bool $hasAggressiveAntiSpamEnabled,
    ) {
    }

    /**
     * Get The identifier of the supergroup, which isn't a broadcast group
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set The identifier of the supergroup, which isn't a broadcast group
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The new value of has_aggressive_anti_spam_enabled
     */
    public function getHasAggressiveAntiSpamEnabled(): bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    /**
     * Set The new value of has_aggressive_anti_spam_enabled
     */
    public function setHasAggressiveAntiSpamEnabled(bool $hasAggressiveAntiSpamEnabled): self
    {
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupHasAggressiveAntiSpamEnabled',
            'supergroup_id' => $this->getSupergroupId(),
            'has_aggressive_anti_spam_enabled' => $this->getHasAggressiveAntiSpamEnabled(),
        ];
    }
}
