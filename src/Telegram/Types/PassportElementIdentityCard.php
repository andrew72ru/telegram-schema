<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's identity card @identity_card Identity card.
 */
class PassportElementIdentityCard extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('identity_card')]
        private IdentityDocument|null $identityCard = null,
    ) {
    }

    public function getIdentityCard(): IdentityDocument|null
    {
        return $this->identityCard;
    }

    public function setIdentityCard(IdentityDocument|null $identityCard): self
    {
        $this->identityCard = $identityCard;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementIdentityCard',
            'identity_card' => $this->getIdentityCard(),
        ];
    }
}
