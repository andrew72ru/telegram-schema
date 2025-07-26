<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Disables all active non-editable usernames of a supergroup or channel, requires owner privileges in the supergroup or channel @supergroup_id Identifier of the supergroup or channel
 */
class DisableAllSupergroupUsernames extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
    ) {
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'disableAllSupergroupUsernames',
            'supergroup_id' => $this->getSupergroupId(),
        ];
    }
}
