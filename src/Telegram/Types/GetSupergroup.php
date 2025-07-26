<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a supergroup or a channel by its identifier. This is an offline method if the current user is not a bot @supergroup_id Supergroup or channel identifier
 */
class GetSupergroup extends Supergroup implements \JsonSerializable
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
            '@type' => 'getSupergroup',
            'supergroup_id' => $this->getSupergroupId(),
        ];
    }
}
