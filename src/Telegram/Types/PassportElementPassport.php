<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's passport @passport Passport
 */
class PassportElementPassport extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('passport')]
        private IdentityDocument|null $passport = null,
    ) {
    }

    public function getPassport(): IdentityDocument|null
    {
        return $this->passport;
    }

    public function setPassport(IdentityDocument|null $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementPassport',
            'passport' => $this->getPassport(),
        ];
    }
}
