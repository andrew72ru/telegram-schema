<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's address @address The address to be saved.
 */
class InputPassportElementAddress extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('address')]
        private Address|null $address = null,
    ) {
    }

    public function getAddress(): Address|null
    {
        return $this->address;
    }

    public function setAddress(Address|null $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementAddress',
            'address' => $this->getAddress(),
        ];
    }
}
