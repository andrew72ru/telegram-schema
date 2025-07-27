<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a phone number by its prefix. Can be called before authorization @phone_number_prefix The phone number prefix.
 */
class GetPhoneNumberInfo extends PhoneNumberInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('phone_number_prefix')]
        private string $phoneNumberPrefix,
    ) {
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    public function setPhoneNumberPrefix(string $phoneNumberPrefix): self
    {
        $this->phoneNumberPrefix = $phoneNumberPrefix;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPhoneNumberInfo',
            'phone_number_prefix' => $this->getPhoneNumberPrefix(),
        ];
    }
}
