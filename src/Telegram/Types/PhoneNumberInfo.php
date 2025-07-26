<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a phone number
 */
class PhoneNumberInfo implements \JsonSerializable
{
    public function __construct(
        /** Information about the country to which the phone number belongs; may be null */
        #[SerializedName('country')]
        private CountryInfo|null $country = null,
        /** The part of the phone number denoting country calling code or its part */
        #[SerializedName('country_calling_code')]
        private string $countryCallingCode,
        /** The phone number without country calling code formatted accordingly to local rules. Expected digits are returned as '-', but even more digits might be entered by the user */
        #[SerializedName('formatted_phone_number')]
        private string $formattedPhoneNumber,
        /** True, if the phone number was bought at https://fragment.com and isn't tied to a SIM card. Information about the phone number can be received using getCollectibleItemInfo */
        #[SerializedName('is_anonymous')]
        private bool $isAnonymous,
    ) {
    }

    /**
     * Get Information about the country to which the phone number belongs; may be null
     */
    public function getCountry(): CountryInfo|null
    {
        return $this->country;
    }

    /**
     * Set Information about the country to which the phone number belongs; may be null
     */
    public function setCountry(CountryInfo|null $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get The part of the phone number denoting country calling code or its part
     */
    public function getCountryCallingCode(): string
    {
        return $this->countryCallingCode;
    }

    /**
     * Set The part of the phone number denoting country calling code or its part
     */
    public function setCountryCallingCode(string $countryCallingCode): self
    {
        $this->countryCallingCode = $countryCallingCode;

        return $this;
    }

    /**
     * Get The phone number without country calling code formatted accordingly to local rules. Expected digits are returned as '-', but even more digits might be entered by the user
     */
    public function getFormattedPhoneNumber(): string
    {
        return $this->formattedPhoneNumber;
    }

    /**
     * Set The phone number without country calling code formatted accordingly to local rules. Expected digits are returned as '-', but even more digits might be entered by the user
     */
    public function setFormattedPhoneNumber(string $formattedPhoneNumber): self
    {
        $this->formattedPhoneNumber = $formattedPhoneNumber;

        return $this;
    }

    /**
     * Get True, if the phone number was bought at https://fragment.com and isn't tied to a SIM card. Information about the phone number can be received using getCollectibleItemInfo
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * Set True, if the phone number was bought at https://fragment.com and isn't tied to a SIM card. Information about the phone number can be received using getCollectibleItemInfo
     */
    public function setIsAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'phoneNumberInfo',
            'country' => $this->getCountry(),
            'country_calling_code' => $this->getCountryCallingCode(),
            'formatted_phone_number' => $this->getFormattedPhoneNumber(),
            'is_anonymous' => $this->getIsAnonymous(),
        ];
    }
}
