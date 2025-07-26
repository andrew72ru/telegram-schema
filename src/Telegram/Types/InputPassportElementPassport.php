<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's passport @passport The passport to be saved
 */
class InputPassportElementPassport extends InputPassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('passport')]
        private InputIdentityDocument|null $passport = null,
    ) {
    }

    public function getPassport(): InputIdentityDocument|null
    {
        return $this->passport;
    }

    public function setPassport(InputIdentityDocument|null $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementPassport',
            'passport' => $this->getPassport(),
        ];
    }
}
