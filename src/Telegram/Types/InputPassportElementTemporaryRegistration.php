<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's temporary registration @temporary_registration The temporary registration document to be saved.
 */
class InputPassportElementTemporaryRegistration extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('temporary_registration')]
        private InputPersonalDocument|null $temporaryRegistration = null,
    ) {
    }

    public function getTemporaryRegistration(): InputPersonalDocument|null
    {
        return $this->temporaryRegistration;
    }

    public function setTemporaryRegistration(InputPersonalDocument|null $temporaryRegistration): self
    {
        $this->temporaryRegistration = $temporaryRegistration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementTemporaryRegistration',
            'temporary_registration' => $this->getTemporaryRegistration(),
        ];
    }
}
