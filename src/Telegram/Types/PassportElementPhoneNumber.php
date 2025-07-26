<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's phone number @phone_number Phone number
 */
class PassportElementPhoneNumber extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('phone_number')]
        private string $phoneNumber,
    ) {
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementPhoneNumber',
            'phone_number' => $this->getPhoneNumber(),
        ];
    }
}
