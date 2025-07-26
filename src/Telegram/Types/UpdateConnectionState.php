<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The connection state has changed. This update must be used only to show a human-readable description of the connection state @state The new connection state
 */
class UpdateConnectionState extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('state')]
        private ConnectionState|null $state = null,
    ) {
    }

    public function getState(): ConnectionState|null
    {
        return $this->state;
    }

    public function setState(ConnectionState|null $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateConnectionState',
            'state' => $this->getState(),
        ];
    }
}
