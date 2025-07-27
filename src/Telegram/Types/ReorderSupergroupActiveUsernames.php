<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes order of active usernames of a supergroup or channel, requires owner privileges in the supergroup or channel.
 */
class ReorderSupergroupActiveUsernames extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** The new order of active usernames. All currently active usernames must be specified */
        #[SerializedName('usernames')]
        private array|null $usernames = null,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup or channel.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get The new order of active usernames. All currently active usernames must be specified.
     */
    public function getUsernames(): array|null
    {
        return $this->usernames;
    }

    /**
     * Set The new order of active usernames. All currently active usernames must be specified.
     */
    public function setUsernames(array|null $usernames): self
    {
        $this->usernames = $usernames;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderSupergroupActiveUsernames',
            'supergroup_id' => $this->getSupergroupId(),
            'usernames' => $this->getUsernames(),
        ];
    }
}
