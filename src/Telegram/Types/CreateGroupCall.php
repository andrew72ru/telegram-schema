<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new group call that isn't bound to a chat @join_parameters Parameters to join the call; pass null to only create call link without joining the call
 */
class CreateGroupCall extends GroupCallInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('join_parameters')]
        private GroupCallJoinParameters|null $joinParameters = null,
    ) {
    }

    public function getJoinParameters(): GroupCallJoinParameters|null
    {
        return $this->joinParameters;
    }

    public function setJoinParameters(GroupCallJoinParameters|null $joinParameters): self
    {
        $this->joinParameters = $joinParameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createGroupCall',
            'join_parameters' => $this->getJoinParameters(),
        ];
    }
}
