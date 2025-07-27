<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether the supergroup is a forum; requires owner privileges in the supergroup. Discussion supergroups can't be converted to forums.
 */
class ToggleSupergroupIsForum extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of is_forum */
        #[SerializedName('is_forum')]
        private bool $isForum,
        /** New value of has_forum_tabs; ignored if is_forum is false */
        #[SerializedName('has_forum_tabs')]
        private bool $hasForumTabs,
    ) {
    }

    /**
     * Get Identifier of the supergroup.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of is_forum.
     */
    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    /**
     * Set New value of is_forum.
     */
    public function setIsForum(bool $isForum): self
    {
        $this->isForum = $isForum;

        return $this;
    }

    /**
     * Get New value of has_forum_tabs; ignored if is_forum is false.
     */
    public function getHasForumTabs(): bool
    {
        return $this->hasForumTabs;
    }

    /**
     * Set New value of has_forum_tabs; ignored if is_forum is false.
     */
    public function setHasForumTabs(bool $hasForumTabs): self
    {
        $this->hasForumTabs = $hasForumTabs;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupIsForum',
            'supergroup_id' => $this->getSupergroupId(),
            'is_forum' => $this->getIsForum(),
            'has_forum_tabs' => $this->getHasForumTabs(),
        ];
    }
}
