<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A phone number @phone_number The phone number
 */
class CollectibleItemTypePhoneNumber extends CollectibleItemType implements \JsonSerializable
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
            '@type' => 'collectibleItemTypePhoneNumber',
            'phone_number' => $this->getPhoneNumber(),
        ];
    }
}
