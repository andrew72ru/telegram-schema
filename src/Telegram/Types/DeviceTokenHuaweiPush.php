<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for HUAWEI Push Service @token Device registration token; may be empty to deregister a device @encrypt True, if push notifications must be additionally encrypted.
 */
class DeviceTokenHuaweiPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('token')]
        private string $token,
        #[SerializedName('encrypt')]
        private bool $encrypt,
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

    public function getEncrypt(): bool
    {
        return $this->encrypt;
    }

    public function setEncrypt(bool $encrypt): self
    {
        $this->encrypt = $encrypt;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenHuaweiPush',
            'token' => $this->getToken(),
            'encrypt' => $this->getEncrypt(),
        ];
    }
}
