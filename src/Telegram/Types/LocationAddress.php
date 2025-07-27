<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an address of a location.
 */
class LocationAddress implements \JsonSerializable
{
    public function __construct(
        /** A two-letter ISO 3166-1 alpha-2 country code */
        #[SerializedName('country_code')]
        private string $countryCode,
        /** State, if applicable; empty if unknown */
        #[SerializedName('state')]
        private string $state,
        /** City; empty if unknown */
        #[SerializedName('city')]
        private string $city,
        /** The address; empty if unknown */
        #[SerializedName('street')]
        private string $street,
    ) {
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get State, if applicable; empty if unknown.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Set State, if applicable; empty if unknown.
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get City; empty if unknown.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set City; empty if unknown.
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get The address; empty if unknown.
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set The address; empty if unknown.
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'locationAddress',
            'country_code' => $this->getCountryCode(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'street' => $this->getStreet(),
        ];
    }
}
