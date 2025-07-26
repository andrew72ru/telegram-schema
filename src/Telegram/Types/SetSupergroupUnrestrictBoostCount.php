<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; requires can_restrict_members administrator right
 */
class SetSupergroupUnrestrictBoostCount extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of the unrestrict_boost_count supergroup setting; 0-8. Use 0 to remove the setting */
        #[SerializedName('unrestrict_boost_count')]
        private int $unrestrictBoostCount,
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
     * Get New value of the unrestrict_boost_count supergroup setting; 0-8. Use 0 to remove the setting
     */
    public function getUnrestrictBoostCount(): int
    {
        return $this->unrestrictBoostCount;
    }

    /**
     * Set New value of the unrestrict_boost_count supergroup setting; 0-8. Use 0 to remove the setting
     */
    public function setUnrestrictBoostCount(int $unrestrictBoostCount): self
    {
        $this->unrestrictBoostCount = $unrestrictBoostCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setSupergroupUnrestrictBoostCount',
            'supergroup_id' => $this->getSupergroupId(),
            'unrestrict_boost_count' => $this->getUnrestrictBoostCount(),
        ];
    }
}
