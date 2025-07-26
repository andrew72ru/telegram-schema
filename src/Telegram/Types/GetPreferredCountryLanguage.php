<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an IETF language tag of the language preferred in the country, which must be used to fill native fields in Telegram Passport personal details. Returns a 404 error if unknown @country_code A two-letter ISO 3166-1 alpha-2 country code
 */
class GetPreferredCountryLanguage extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('country_code')]
        private string $countryCode,
    ) {
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPreferredCountryLanguage',
            'country_code' => $this->getCountryCode(),
        ];
    }
}
