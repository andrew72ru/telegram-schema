<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for Microsoft Push Notification Service @channel_uri Push notification channel URI; may be empty to deregister a device
 */
class DeviceTokenMicrosoftPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('channel_uri')]
        private string $channelUri,
    ) {
    }

    public function getChannelUri(): string
    {
        return $this->channelUri;
    }

    public function setChannelUri(string $channelUri): self
    {
        $this->channelUri = $channelUri;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenMicrosoftPush',
            'channel_uri' => $this->getChannelUri(),
        ];
    }
}
