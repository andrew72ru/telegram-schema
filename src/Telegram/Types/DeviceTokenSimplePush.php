<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Simple Push API for Firefox OS @endpoint Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device
 */
class DeviceTokenSimplePush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('endpoint')]
        private string $endpoint,
    ) {
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenSimplePush',
            'endpoint' => $this->getEndpoint(),
        ];
    }
}
