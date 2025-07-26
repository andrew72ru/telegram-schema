<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Registers the currently used device for receiving push notifications. Returns a globally unique identifier of the push notification subscription @device_token Device token @other_user_ids List of user identifiers of other users currently using the application
 */
class RegisterDevice extends PushReceiverId implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('device_token')]
        private DeviceToken|null $deviceToken = null,
        #[SerializedName('other_user_ids')]
        private array|null $otherUserIds = null,
    ) {
    }

    public function getDeviceToken(): DeviceToken|null
    {
        return $this->deviceToken;
    }

    public function setDeviceToken(DeviceToken|null $deviceToken): self
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    public function getOtherUserIds(): array|null
    {
        return $this->otherUserIds;
    }

    public function setOtherUserIds(array|null $otherUserIds): self
    {
        $this->otherUserIds = $otherUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'registerDevice',
            'device_token' => $this->getDeviceToken(),
            'other_user_ids' => $this->getOtherUserIds(),
        ];
    }
}
