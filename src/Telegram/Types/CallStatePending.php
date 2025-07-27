<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call is pending, waiting to be accepted by a user @is_created True, if the call has already been created by the server @is_received True, if the call has already been received by the other party.
 */
class CallStatePending extends CallState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_created')]
        private bool $isCreated,
        #[SerializedName('is_received')]
        private bool $isReceived,
    ) {
    }

    public function getIsCreated(): bool
    {
        return $this->isCreated;
    }

    public function setIsCreated(bool $isCreated): self
    {
        $this->isCreated = $isCreated;

        return $this;
    }

    public function getIsReceived(): bool
    {
        return $this->isReceived;
    }

    public function setIsReceived(bool $isReceived): self
    {
        $this->isReceived = $isReceived;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStatePending',
            'is_created' => $this->getIsCreated(),
            'is_received' => $this->getIsReceived(),
        ];
    }
}
