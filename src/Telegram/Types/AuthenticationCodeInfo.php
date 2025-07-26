<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the authentication code that was sent
 */
class AuthenticationCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** A phone number that is being authenticated */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** The way the code was sent to the user */
        #[SerializedName('type')]
        private AuthenticationCodeType|null $type = null,
        /** The way the next code will be sent to the user; may be null */
        #[SerializedName('next_type')]
        private AuthenticationCodeType|null $nextType = null,
        /** Timeout before the code can be re-sent, in seconds */
        #[SerializedName('timeout')]
        private int $timeout,
    ) {
    }

    /**
     * Get A phone number that is being authenticated
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set A phone number that is being authenticated
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get The way the code was sent to the user
     */
    public function getType(): AuthenticationCodeType|null
    {
        return $this->type;
    }

    /**
     * Set The way the code was sent to the user
     */
    public function setType(AuthenticationCodeType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get The way the next code will be sent to the user; may be null
     */
    public function getNextType(): AuthenticationCodeType|null
    {
        return $this->nextType;
    }

    /**
     * Set The way the next code will be sent to the user; may be null
     */
    public function setNextType(AuthenticationCodeType|null $nextType): self
    {
        $this->nextType = $nextType;

        return $this;
    }

    /**
     * Get Timeout before the code can be re-sent, in seconds
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * Set Timeout before the code can be re-sent, in seconds
     */
    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeInfo',
            'phone_number' => $this->getPhoneNumber(),
            'type' => $this->getType(),
            'next_type' => $this->getNextType(),
            'timeout' => $this->getTimeout(),
        ];
    }
}
