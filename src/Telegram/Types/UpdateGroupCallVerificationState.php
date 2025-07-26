<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The verification state of an encrypted group call has changed; for group calls not bound to a chat only
 */
class UpdateGroupCallVerificationState extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the group call */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** The call state generation to which the emoji corresponds. If generation is different for two users, then their emoji may be also different */
        #[SerializedName('generation')]
        private int $generation,
        /** Group call state fingerprint represented as 4 emoji; may be empty if the state isn't verified yet */
        #[SerializedName('emojis')]
        private array|null $emojis = null,
    ) {
    }

    /**
     * Get Identifier of the group call
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Identifier of the group call
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get The call state generation to which the emoji corresponds. If generation is different for two users, then their emoji may be also different
     */
    public function getGeneration(): int
    {
        return $this->generation;
    }

    /**
     * Set The call state generation to which the emoji corresponds. If generation is different for two users, then their emoji may be also different
     */
    public function setGeneration(int $generation): self
    {
        $this->generation = $generation;

        return $this;
    }

    /**
     * Get Group call state fingerprint represented as 4 emoji; may be empty if the state isn't verified yet
     */
    public function getEmojis(): array|null
    {
        return $this->emojis;
    }

    /**
     * Set Group call state fingerprint represented as 4 emoji; may be empty if the state isn't verified yet
     */
    public function setEmojis(array|null $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateGroupCallVerificationState',
            'group_call_id' => $this->getGroupCallId(),
            'generation' => $this->getGeneration(),
            'emojis' => $this->getEmojis(),
        ];
    }
}
