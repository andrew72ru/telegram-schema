<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about participants of a non-joined group call that is not bound to a chat.
 */
class GetGroupCallParticipants extends GroupCallParticipants implements \JsonSerializable
{
    public function __construct(
        /** The group call which participants will be returned */
        #[SerializedName('input_group_call')]
        private InputGroupCall|null $inputGroupCall = null,
        /** The maximum number of participants to return; must be positive */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The group call which participants will be returned.
     */
    public function getInputGroupCall(): InputGroupCall|null
    {
        return $this->inputGroupCall;
    }

    /**
     * Set The group call which participants will be returned.
     */
    public function setInputGroupCall(InputGroupCall|null $inputGroupCall): self
    {
        $this->inputGroupCall = $inputGroupCall;

        return $this;
    }

    /**
     * Get The maximum number of participants to return; must be positive.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of participants to return; must be positive.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGroupCallParticipants',
            'input_group_call' => $this->getInputGroupCall(),
            'limit' => $this->getLimit(),
        ];
    }
}
