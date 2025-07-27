<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an emoji for the given country. Returns an empty string on failure. Can be called synchronously @country_code A two-letter ISO 3166-1 alpha-2 country code as received from getCountries.
 */
class GetCountryFlagEmoji extends Text implements \JsonSerializable
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
            '@type' => 'getCountryFlagEmoji',
            'country_code' => $this->getCountryCode(),
        ];
    }
}
