<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the birthdate of the current user @birthdate The new value of the current user's birthdate; pass null to remove the birthdate
 */
class SetBirthdate extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('birthdate')]
        private Birthdate|null $birthdate = null,
    ) {
    }

    public function getBirthdate(): Birthdate|null
    {
        return $this->birthdate;
    }

    public function setBirthdate(Birthdate|null $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBirthdate',
            'birthdate' => $this->getBirthdate(),
        ];
    }
}
