<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's personal details @personal_details Personal details of the user.
 */
class InputPassportElementPersonalDetails extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('personal_details')]
        private PersonalDetails|null $personalDetails = null,
    ) {
    }

    public function getPersonalDetails(): PersonalDetails|null
    {
        return $this->personalDetails;
    }

    public function setPersonalDetails(PersonalDetails|null $personalDetails): self
    {
        $this->personalDetails = $personalDetails;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementPersonalDetails',
            'personal_details' => $this->getPersonalDetails(),
        ];
    }
}
