<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers. Can be called only if supergroupFullInfo.can_hide_members == true
 */
class ToggleSupergroupHasHiddenMembers extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of has_hidden_members */
        #[SerializedName('has_hidden_members')]
        private bool $hasHiddenMembers,
    ) {
    }

    /**
     * Get Identifier of the supergroup
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of has_hidden_members
     */
    public function getHasHiddenMembers(): bool
    {
        return $this->hasHiddenMembers;
    }

    /**
     * Set New value of has_hidden_members
     */
    public function setHasHiddenMembers(bool $hasHiddenMembers): self
    {
        $this->hasHiddenMembers = $hasHiddenMembers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupHasHiddenMembers',
            'supergroup_id' => $this->getSupergroupId(),
            'has_hidden_members' => $this->getHasHiddenMembers(),
        ];
    }
}
