<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A business connection has changed; for bots only @connection New data about the connection.
 */
class UpdateBusinessConnection extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('connection')]
        private BusinessConnection|null $connection = null,
    ) {
    }

    public function getConnection(): BusinessConnection|null
    {
        return $this->connection;
    }

    public function setConnection(BusinessConnection|null $connection): self
    {
        $this->connection = $connection;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateBusinessConnection',
            'connection' => $this->getConnection(),
        ];
    }
}
