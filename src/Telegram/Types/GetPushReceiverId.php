<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a globally unique push notification subscription identifier for identification of an account, which has received a push notification. Can be called synchronously @payload JSON-encoded push notification payload.
 */
class GetPushReceiverId extends PushReceiverId implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('payload')]
        private string $payload,
    ) {
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPushReceiverId',
            'payload' => $this->getPayload(),
        ];
    }
}
