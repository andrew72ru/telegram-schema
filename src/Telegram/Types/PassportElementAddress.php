<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's address @address Address
 */
class PassportElementAddress extends PassportElement implements \JsonSerializable
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
            '@type' => 'passportElementAddress',
            'address' => $this->getAddress(),
        ];
    }
}
