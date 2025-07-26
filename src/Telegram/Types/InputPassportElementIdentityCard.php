<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's identity card @identity_card The identity card to be saved
 */
class InputPassportElementIdentityCard extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('identity_card')]
        private InputIdentityDocument|null $identityCard = null,
    ) {
    }

    public function getIdentityCard(): InputIdentityDocument|null
    {
        return $this->identityCard;
    }

    public function setIdentityCard(InputIdentityDocument|null $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementIdentityCard',
            'identity_card' => $this->getIdentityCard(),
        ];
    }
}
