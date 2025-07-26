<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns full information about a supergroup or a channel by its identifier, cached for up to 1 minute @supergroup_id Supergroup or channel identifier
 */
class GetSupergroupFullInfo extends SupergroupFullInfo implements \JsonSerializable
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
            '@type' => 'getSupergroupFullInfo',
            'supergroup_id' => $this->getSupergroupId(),
        ];
    }
}
