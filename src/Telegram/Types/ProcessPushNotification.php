<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Handles a push notification. Returns error with code 406 if the push notification is not supported and connection to the server is required to fetch new data. Can be called before authorization.
 */
class ProcessPushNotification extends Ok implements \JsonSerializable
{
    public function __construct(
        /** JSON-encoded push notification payload with all fields sent by the server, and "google.sent_time" and "google.notification.sound" fields added */
        #[SerializedName('payload')]
        private string $payload,
    ) {
    }

    /**
     * Get JSON-encoded push notification payload with all fields sent by the server, and "google.sent_time" and "google.notification.sound" fields added.
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set JSON-encoded push notification payload with all fields sent by the server, and "google.sent_time" and "google.notification.sound" fields added.
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'processPushNotification',
            'payload' => $this->getPayload(),
        ];
    }
}
