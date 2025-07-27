<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The last digits of the phone number that calls are the code that must be entered manually by the user.
 */
class AuthenticationCodeTypeMissedCall extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** Prefix of the phone number from which the call will be made */
        #[SerializedName('phone_number_prefix')]
        private string $phoneNumberPrefix,
        /** Number of digits in the code, excluding the prefix */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get Prefix of the phone number from which the call will be made.
     */
    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    /**
     * Set Prefix of the phone number from which the call will be made.
     */
    public function setPhoneNumberPrefix(string $phoneNumberPrefix): self
    {
        $this->phoneNumberPrefix = $phoneNumberPrefix;

        return $this;
    }

    /**
     * Get Number of digits in the code, excluding the prefix.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Number of digits in the code, excluding the prefix.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeMissedCall',
            'phone_number_prefix' => $this->getPhoneNumberPrefix(),
            'length' => $this->getLength(),
        ];
    }
}
