<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link can be used to confirm ownership of a phone number to prevent account deletion. Call sendPhoneNumberCode with the given phone number and with phoneNumberCodeTypeConfirmOwnership with the given hash to process the link.
 */
class InternalLinkTypePhoneNumberConfirmation extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Hash value from the link */
        #[SerializedName('hash')]
        private string $hash,
        /** Phone number value from the link */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
    ) {
    }

    /**
     * Get Hash value from the link.
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Set Hash value from the link.
     */
    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get Phone number value from the link.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number value from the link.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePhoneNumberConfirmation',
            'hash' => $this->getHash(),
            'phone_number' => $this->getPhoneNumber(),
        ];
    }
}
