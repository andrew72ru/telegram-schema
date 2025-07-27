<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Settings for Firebase Authentication in the official iOS application @device_token Device token from Apple Push Notification service @is_app_sandbox True, if App Sandbox is enabled.
 */
class FirebaseAuthenticationSettingsIos extends FirebaseAuthenticationSettings implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('device_token')]
        private string $deviceToken,
        #[SerializedName('is_app_sandbox')]
        private bool $isAppSandbox,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'firebaseAuthenticationSettingsIos',
            'device_token' => $this->getDeviceToken(),
            'is_app_sandbox' => $this->getIsAppSandbox(),
        ];
    }
}
