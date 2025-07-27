<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's temporary registration @temporary_registration Temporary registration.
 */
class PassportElementTemporaryRegistration extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('temporary_registration')]
        private PersonalDocument|null $temporaryRegistration = null,
    ) {
    }

    public function getTemporaryRegistration(): PersonalDocument|null
    {
        return $this->temporaryRegistration;
    }

    public function setTemporaryRegistration(PersonalDocument|null $temporaryRegistration): self
    {
        $this->temporaryRegistration = $temporaryRegistration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementTemporaryRegistration',
            'temporary_registration' => $this->getTemporaryRegistration(),
        ];
    }
}
