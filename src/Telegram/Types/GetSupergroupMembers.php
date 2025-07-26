<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about members or banned users in a supergroup or channel. Can be used only if supergroupFullInfo.can_get_members == true; additionally, administrator privileges may be required for some filters
 */
class GetSupergroupMembers extends ChatMembers implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The type of users to return; pass null to use supergroupMembersFilterRecent */
        #[SerializedName('filter')]
        private SupergroupMembersFilter|null $filter = null,
        /** Number of users to skip */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of users to be returned; up to 200 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup or channel
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The type of users to return; pass null to use supergroupMembersFilterRecent
     */
    public function getFilter(): SupergroupMembersFilter|null
    {
        return $this->filter;
    }

    /**
     * Set The type of users to return; pass null to use supergroupMembersFilterRecent
     */
    public function setFilter(SupergroupMembersFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get Number of users to skip
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Number of users to skip
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of users to be returned; up to 200
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of users to be returned; up to 200
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSupergroupMembers',
            'supergroup_id' => $this->getSupergroupId(),
            'filter' => $this->getFilter(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
