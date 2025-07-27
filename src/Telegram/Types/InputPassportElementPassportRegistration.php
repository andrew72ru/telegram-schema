<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's passport registration @passport_registration The passport registration page to be saved.
 */
class InputPassportElementPassportRegistration extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('passport_registration')]
        private InputPersonalDocument|null $passportRegistration = null,
    ) {
    }

    public function getPassportRegistration(): InputPersonalDocument|null
    {
        return $this->passportRegistration;
    }

    public function setPassportRegistration(InputPersonalDocument|null $passportRegistration): self
    {
        $this->passportRegistration = $passportRegistration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementPassportRegistration',
            'passport_registration' => $this->getPassportRegistration(),
        ];
    }
}
