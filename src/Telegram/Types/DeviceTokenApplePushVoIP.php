<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Apple Push Notification service VoIP notifications @device_token Device token; may be empty to deregister a device @is_app_sandbox True, if App Sandbox is enabled @encrypt True, if push notifications must be additionally encrypted.
 */
class DeviceTokenApplePushVoIP extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('device_token')]
        private string $deviceToken,
        #[SerializedName('is_app_sandbox')]
        private bool $isAppSandbox,
        #[SerializedName('encrypt')]
        private bool $encrypt,
    ) {
    }

    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    public function setDeviceToken(string $deviceToken): self
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    public function getIsAppSandbox(): bool
    {
        return $this->isAppSandbox;
    }

    public function setIsAppSandbox(bool $isAppSandbox): self
    {
        $this->isAppSandbox = $isAppSandbox;

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
            '@type' => 'deviceTokenApplePushVoIP',
            'device_token' => $this->getDeviceToken(),
            'is_app_sandbox' => $this->getIsAppSandbox(),
            'encrypt' => $this->getEncrypt(),
        ];
    }
}
