<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's internal passport @internal_passport The internal passport to be saved.
 */
class InputPassportElementInternalPassport extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('internal_passport')]
        private InputIdentityDocument|null $internalPassport = null,
    ) {
    }

    public function getInternalPassport(): InputIdentityDocument|null
    {
        return $this->internalPassport;
    }

    public function setInternalPassport(InputIdentityDocument|null $internalPassport): self
    {
        $this->internalPassport = $internalPassport;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementInternalPassport',
            'internal_passport' => $this->getInternalPassport(),
        ];
    }
}
