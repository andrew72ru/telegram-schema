<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The session was created recently, user needs to wait @retry_after Time left before the session can be used to transfer ownership of a chat, in seconds
 */
class CanTransferOwnershipResultSessionTooFresh extends CanTransferOwnershipResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('retry_after')]
        private int $retryAfter,
    ) {
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function setRetryAfter(int $retryAfter): self
    {
        $this->retryAfter = $retryAfter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canTransferOwnershipResultSessionTooFresh',
            'retry_after' => $this->getRetryAfter(),
        ];
    }
}
