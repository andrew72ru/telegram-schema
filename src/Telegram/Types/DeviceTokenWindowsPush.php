<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Windows Push Notification Services @access_token The access token that will be used to send notifications; may be empty to deregister a device.
 */
class DeviceTokenWindowsPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('access_token')]
        private string $accessToken,
    ) {
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenWindowsPush',
            'access_token' => $this->getAccessToken(),
        ];
    }
}
