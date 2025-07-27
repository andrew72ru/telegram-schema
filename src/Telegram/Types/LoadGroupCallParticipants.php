<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads more participants of a group call. The loaded participants will be received through updates. Use the field groupCall.loaded_all_participants to check whether all participants have already been loaded.
 */
class LoadGroupCallParticipants extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier. The group call must be previously received through getGroupCall and must be joined or being joined */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** The maximum number of participants to load; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Group call identifier. The group call must be previously received through getGroupCall and must be joined or being joined.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier. The group call must be previously received through getGroupCall and must be joined or being joined.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get The maximum number of participants to load; up to 100.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of participants to load; up to 100.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loadGroupCallParticipants',
            'group_call_id' => $this->getGroupCallId(),
            'limit' => $this->getLimit(),
        ];
    }
}
