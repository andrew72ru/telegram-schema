<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a basic group of 0-200 users (must be upgraded to a supergroup to accommodate more than 200 users)
 */
class BasicGroup implements \JsonSerializable
{
    public function __construct(
        /** Group identifier */
        #[SerializedName('id')]
        private int $id,
        /** Number of members in the group */
        #[SerializedName('member_count')]
        private int $memberCount,
        /** Status of the current user in the group */
        #[SerializedName('status')]
        private ChatMemberStatus|null $status = null,
        /** True, if the group is active */
        #[SerializedName('is_active')]
        private bool $isActive,
        /** Identifier of the supergroup to which this group was upgraded; 0 if none */
        #[SerializedName('upgraded_to_supergroup_id')]
        private int $upgradedToSupergroupId,
    ) {
    }

    /**
     * Get Group identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Group identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Number of members in the group
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * Set Number of members in the group
     */
    public function setMemberCount(int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get Status of the current user in the group
     */
    public function getStatus(): ChatMemberStatus|null
    {
        return $this->status;
    }

    /**
     * Set Status of the current user in the group
     */
    public function setStatus(ChatMemberStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get True, if the group is active
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set True, if the group is active
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get Identifier of the supergroup to which this group was upgraded; 0 if none
     */
    public function getUpgradedToSupergroupId(): int
    {
        return $this->upgradedToSupergroupId;
    }

    /**
     * Set Identifier of the supergroup to which this group was upgraded; 0 if none
     */
    public function setUpgradedToSupergroupId(int $upgradedToSupergroupId): self
    {
        $this->upgradedToSupergroupId = $upgradedToSupergroupId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'basicGroup',
            'id' => $this->getId(),
            'member_count' => $this->getMemberCount(),
            'status' => $this->getStatus(),
            'is_active' => $this->getIsActive(),
            'upgraded_to_supergroup_id' => $this->getUpgradedToSupergroupId(),
        ];
    }
}
