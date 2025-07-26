<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a just created or just joined group call @group_call_id Identifier of the group call @join_payload Join response payload for tgcalls; empty if the call isn't joined
 */
class GroupCallInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        #[SerializedName('join_payload')]
        private string $joinPayload,
    ) {
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    public function getJoinPayload(): string
    {
        return $this->joinPayload;
    }

    public function setJoinPayload(string $joinPayload): self
    {
        $this->joinPayload = $joinPayload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallInfo',
            'group_call_id' => $this->getGroupCallId(),
            'join_payload' => $this->getJoinPayload(),
        ];
    }
}
