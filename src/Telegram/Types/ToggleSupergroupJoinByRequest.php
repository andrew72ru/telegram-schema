<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether all users directly joining the supergroup need to be approved by supergroup administrators; requires can_restrict_members administrator right.
 */
class ToggleSupergroupJoinByRequest extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup that isn't a broadcast group */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of join_by_request */
        #[SerializedName('join_by_request')]
        private bool $joinByRequest,
    ) {
    }

    /**
     * Get Identifier of the supergroup that isn't a broadcast group.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup that isn't a broadcast group.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of join_by_request.
     */
    public function getJoinByRequest(): bool
    {
        return $this->joinByRequest;
    }

    /**
     * Set New value of join_by_request.
     */
    public function setJoinByRequest(bool $joinByRequest): self
    {
        $this->joinByRequest = $joinByRequest;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupJoinByRequest',
            'supergroup_id' => $this->getSupergroupId(),
            'join_by_request' => $this->getJoinByRequest(),
        ];
    }
}
