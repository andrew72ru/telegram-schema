<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a business connection by its identifier; for bots only @connection_id Identifier of the business connection to return.
 */
class GetBusinessConnection extends BusinessConnection implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('connection_id')]
        private string $connectionId,
    ) {
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function setConnectionId(string $connectionId): self
    {
        $this->connectionId = $connectionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessConnection',
            'connection_id' => $this->getConnectionId(),
        ];
    }
}
