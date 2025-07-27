<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an address.
 */
class Address implements \JsonSerializable
{
    public function __construct(
        /** A two-letter ISO 3166-1 alpha-2 country code */
        #[SerializedName('country_code')]
        private string $countryCode,
        /** State, if applicable */
        #[SerializedName('state')]
        private string $state,
        /** City */
        #[SerializedName('city')]
        private string $city,
        /** First line of the address */
        #[SerializedName('street_line1')]
        private string $streetLine1,
        /** Second line of the address */
        #[SerializedName('street_line2')]
        private string $streetLine2,
        /** Address postal code */
        #[SerializedName('postal_code')]
        private string $postalCode,
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
     * Get State, if applicable.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Set State, if applicable.
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set City.
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get First line of the address.
     */
    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    /**
     * Set First line of the address.
     */
    public function setStreetLine1(string $streetLine1): self
    {
        $this->streetLine1 = $streetLine1;

        return $this;
    }

    /**
     * Get Second line of the address.
     */
    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    /**
     * Set Second line of the address.
     */
    public function setStreetLine2(string $streetLine2): self
    {
        $this->streetLine2 = $streetLine2;

        return $this;
    }

    /**
     * Get Address postal code.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Set Address postal code.
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'address',
            'country_code' => $this->getCountryCode(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'street_line1' => $this->getStreetLine1(),
            'street_line2' => $this->getStreetLine2(),
            'postal_code' => $this->getPostalCode(),
        ];
    }
}
