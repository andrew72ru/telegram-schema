<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data in supergroupFullInfo has been changed @supergroup_id Identifier of the supergroup or channel @supergroup_full_info New full information about the supergroup
 */
class UpdateSupergroupFullInfo extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        #[SerializedName('supergroup_full_info')]
        private SupergroupFullInfo|null $supergroupFullInfo = null,
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

    public function getSupergroupFullInfo(): SupergroupFullInfo|null
    {
        return $this->supergroupFullInfo;
    }

    public function setSupergroupFullInfo(SupergroupFullInfo|null $supergroupFullInfo): self
    {
        $this->supergroupFullInfo = $supergroupFullInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSupergroupFullInfo',
            'supergroup_id' => $this->getSupergroupId(),
            'supergroup_full_info' => $this->getSupergroupFullInfo(),
        ];
    }
}
