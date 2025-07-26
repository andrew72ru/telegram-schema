<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Upgrades supergroup to a broadcast group; requires owner privileges in the supergroup @supergroup_id Identifier of the supergroup
 */
class ToggleSupergroupIsBroadcastGroup extends Ok implements \JsonSerializable
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
            '@type' => 'toggleSupergroupIsBroadcastGroup',
            'supergroup_id' => $this->getSupergroupId(),
        ];
    }
}
