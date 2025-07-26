<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A token for web Push API
 */
class DeviceTokenWebPush extends DeviceToken implements \JsonSerializable
{
    public function __construct(
        /** Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device */
        #[SerializedName('endpoint')]
        private string $endpoint,
        /** Base64url-encoded P-256 elliptic curve Diffie-Hellman public key */
        #[SerializedName('p256dh_base64url')]
        private string $p256dhBase64url,
        /** Base64url-encoded authentication secret */
        #[SerializedName('auth_base64url')]
        private string $authBase64url,
    ) {
    }

    /**
     * Get Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * Set Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get Base64url-encoded P-256 elliptic curve Diffie-Hellman public key
     */
    public function getP256dhBase64url(): string
    {
        return $this->p256dhBase64url;
    }

    /**
     * Set Base64url-encoded P-256 elliptic curve Diffie-Hellman public key
     */
    public function setP256dhBase64url(string $p256dhBase64url): self
    {
        $this->p256dhBase64url = $p256dhBase64url;

        return $this;
    }

    /**
     * Get Base64url-encoded authentication secret
     */
    public function getAuthBase64url(): string
    {
        return $this->authBase64url;
    }

    /**
     * Set Base64url-encoded authentication secret
     */
    public function setAuthBase64url(string $authBase64url): self
    {
        $this->authBase64url = $authBase64url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deviceTokenWebPush',
            'endpoint' => $this->getEndpoint(),
            'p256dh_base64url' => $this->getP256dhBase64url(),
            'auth_base64url' => $this->getAuthBase64url(),
        ];
    }
}
