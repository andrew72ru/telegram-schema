<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data in basicGroupFullInfo has been changed @basic_group_id Identifier of a basic group @basic_group_full_info New full information about the group
 */
class UpdateBasicGroupFullInfo extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('basic_group_id')]
        private int $basicGroupId,
        #[SerializedName('basic_group_full_info')]
        private BasicGroupFullInfo|null $basicGroupFullInfo = null,
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

    public function getBasicGroupFullInfo(): BasicGroupFullInfo|null
    {
        return $this->basicGroupFullInfo;
    }

    public function setBasicGroupFullInfo(BasicGroupFullInfo|null $basicGroupFullInfo): self
    {
        $this->basicGroupFullInfo = $basicGroupFullInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateBasicGroupFullInfo',
            'basic_group_id' => $this->getBasicGroupId(),
            'basic_group_full_info' => $this->getBasicGroupFullInfo(),
        ];
    }
}
