<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's rental agreement @rental_agreement The rental agreement to be saved.
 */
class InputPassportElementRentalAgreement extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('rental_agreement')]
        private InputPersonalDocument|null $rentalAgreement = null,
    ) {
    }

    public function getRentalAgreement(): InputPersonalDocument|null
    {
        return $this->rentalAgreement;
    }

    public function setRentalAgreement(InputPersonalDocument|null $rentalAgreement): self
    {
        $this->rentalAgreement = $rentalAgreement;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementRentalAgreement',
            'rental_agreement' => $this->getRentalAgreement(),
        ];
    }
}
