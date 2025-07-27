<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data of a basic group has changed. This update is guaranteed to come before the basic group identifier is returned to the application @basic_group New data about the group.
 */
class UpdateBasicGroup extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('basic_group')]
        private BasicGroup|null $basicGroup = null,
    ) {
    }

    public function getBasicGroup(): BasicGroup|null
    {
        return $this->basicGroup;
    }

    public function setBasicGroup(BasicGroup|null $basicGroup): self
    {
        $this->basicGroup = $basicGroup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateBasicGroup',
            'basic_group' => $this->getBasicGroup(),
        ];
    }
}
