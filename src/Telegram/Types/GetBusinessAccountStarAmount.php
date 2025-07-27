<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the amount of Telegram Stars owned by a business account; for bots only @business_connection_id Unique identifier of business connection.
 */
class GetBusinessAccountStarAmount extends StarAmount implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
    ) {
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessAccountStarAmount',
            'business_connection_id' => $this->getBusinessConnectionId(),
        ];
    }
}
