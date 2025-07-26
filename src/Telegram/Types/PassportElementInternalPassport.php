<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's internal passport @internal_passport Internal passport
 */
class PassportElementInternalPassport extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('internal_passport')]
        private IdentityDocument|null $internalPassport = null,
    ) {
    }

    public function getInternalPassport(): IdentityDocument|null
    {
        return $this->internalPassport;
    }

    public function setInternalPassport(IdentityDocument|null $internalPassport): self
    {
        $this->internalPassport = $internalPassport;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementInternalPassport',
            'internal_passport' => $this->getInternalPassport(),
        ];
    }
}
