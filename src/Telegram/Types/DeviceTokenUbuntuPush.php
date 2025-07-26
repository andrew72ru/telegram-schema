<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Ubuntu Push Client service @token Token; may be empty to deregister a device
 */
class DeviceTokenUbuntuPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenUbuntuPush',
            'token' => $this->getToken(),
        ];
    }
}
