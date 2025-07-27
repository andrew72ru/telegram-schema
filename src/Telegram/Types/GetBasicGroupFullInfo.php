<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns full information about a basic group by its identifier @basic_group_id Basic group identifier.
 */
class GetBasicGroupFullInfo extends BasicGroupFullInfo implements \JsonSerializable
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
            '@type' => 'getBasicGroupFullInfo',
            'basic_group_id' => $this->getBasicGroupId(),
        ];
    }
}
