<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about a group call was updated @group_call New data about the group call.
 */
class UpdateGroupCall extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call')]
        private GroupCall|null $groupCall = null,
    ) {
    }

    public function getGroupCall(): GroupCall|null
    {
        return $this->groupCall;
    }

    public function setGroupCall(GroupCall|null $groupCall): self
    {
        $this->groupCall = $groupCall;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateGroupCall',
            'group_call' => $this->getGroupCall(),
        ];
    }
}
