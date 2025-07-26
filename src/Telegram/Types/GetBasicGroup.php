<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a basic group by its identifier. This is an offline method if the current user is not a bot @basic_group_id Basic group identifier
 */
class GetBasicGroup extends BasicGroup implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('basic_group_id')]
        private int $basicGroupId,
    ) {
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function setBasicGroupId(int $basicGroupId): self
    {
        $this->basicGroupId = $basicGroupId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBasicGroup',
            'basic_group_id' => $this->getBasicGroupId(),
        ];
    }
}
