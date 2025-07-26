<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's rental agreement @rental_agreement Rental agreement
 */
class PassportElementRentalAgreement extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('rental_agreement')]
        private PersonalDocument|null $rentalAgreement = null,
    ) {
    }

    public function getRentalAgreement(): PersonalDocument|null
    {
        return $this->rentalAgreement;
    }

    public function setRentalAgreement(PersonalDocument|null $rentalAgreement): self
    {
        $this->rentalAgreement = $rentalAgreement;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementRentalAgreement',
            'rental_agreement' => $this->getRentalAgreement(),
        ];
    }
}
