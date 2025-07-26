<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a country
 */
class CountryInfo implements \JsonSerializable
{
    public function __construct(
        /** A two-letter ISO 3166-1 alpha-2 country code */
        #[SerializedName('country_code')]
        private string $countryCode,
        /** Native name of the country */
        #[SerializedName('name')]
        private string $name,
        /** English name of the country */
        #[SerializedName('english_name')]
        private string $englishName,
        /** True, if the country must be hidden from the list of all countries */
        #[SerializedName('is_hidden')]
        private bool $isHidden,
        /** List of country calling codes */
        #[SerializedName('calling_codes')]
        private array|null $callingCodes = null,
    ) {
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get Native name of the country
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Native name of the country
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get English name of the country
     */
    public function getEnglishName(): string
    {
        return $this->englishName;
    }

    /**
     * Set English name of the country
     */
    public function setEnglishName(string $englishName): self
    {
        $this->englishName = $englishName;

        return $this;
    }

    /**
     * Get True, if the country must be hidden from the list of all countries
     */
    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * Set True, if the country must be hidden from the list of all countries
     */
    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    /**
     * Get List of country calling codes
     */
    public function getCallingCodes(): array|null
    {
        return $this->callingCodes;
    }

    /**
     * Set List of country calling codes
     */
    public function setCallingCodes(array|null $callingCodes): self
    {
        $this->callingCodes = $callingCodes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'countryInfo',
            'country_code' => $this->getCountryCode(),
            'name' => $this->getName(),
            'english_name' => $this->getEnglishName(),
            'is_hidden' => $this->getIsHidden(),
            'calling_codes' => $this->getCallingCodes(),
        ];
    }
}
