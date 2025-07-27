<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A digit-only authentication code is delivered via Firebase Authentication to the official iOS application.
 */
class AuthenticationCodeTypeFirebaseIos extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** Receipt of successful application token validation to compare with receipt from push notification */
        #[SerializedName('receipt')]
        private string $receipt,
        /** Time after the next authentication method is expected to be used if verification push notification isn't received, in seconds */
        #[SerializedName('push_timeout')]
        private int $pushTimeout,
        /** Length of the code */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get Receipt of successful application token validation to compare with receipt from push notification.
     */
    public function getReceipt(): string
    {
        return $this->receipt;
    }

    /**
     * Set Receipt of successful application token validation to compare with receipt from push notification.
     */
    public function setReceipt(string $receipt): self
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Get Time after the next authentication method is expected to be used if verification push notification isn't received, in seconds.
     */
    public function getPushTimeout(): int
    {
        return $this->pushTimeout;
    }

    /**
     * Set Time after the next authentication method is expected to be used if verification push notification isn't received, in seconds.
     */
    public function setPushTimeout(int $pushTimeout): self
    {
        $this->pushTimeout = $pushTimeout;

        return $this;
    }

    /**
     * Get Length of the code.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Length of the code.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeFirebaseIos',
            'receipt' => $this->getReceipt(),
            'push_timeout' => $this->getPushTimeout(),
            'length' => $this->getLength(),
        ];
    }
}
