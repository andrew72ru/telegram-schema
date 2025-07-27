<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's passport registration pages @passport_registration Passport registration pages.
 */
class PassportElementPassportRegistration extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('passport_registration')]
        private PersonalDocument|null $passportRegistration = null,
    ) {
    }

    public function getPassportRegistration(): PersonalDocument|null
    {
        return $this->passportRegistration;
    }

    public function setPassportRegistration(PersonalDocument|null $passportRegistration): self
    {
        $this->passportRegistration = $passportRegistration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementPassportRegistration',
            'passport_registration' => $this->getPassportRegistration(),
        ];
    }
}
