<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Joins a group call that is not bound to a chat @input_group_call The group call to join @join_parameters Parameters to join the call
 */
class JoinGroupCall extends GroupCallInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('input_group_call')]
        private InputGroupCall|null $inputGroupCall = null,
        #[SerializedName('join_parameters')]
        private GroupCallJoinParameters|null $joinParameters = null,
    ) {
    }

    public function getInputGroupCall(): InputGroupCall|null
    {
        return $this->inputGroupCall;
    }

    public function setInputGroupCall(InputGroupCall|null $inputGroupCall): self
    {
        $this->inputGroupCall = $inputGroupCall;

        return $this;
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
            '@type' => 'joinGroupCall',
            'input_group_call' => $this->getInputGroupCall(),
            'join_parameters' => $this->getJoinParameters(),
        ];
    }
}
