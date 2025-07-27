<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the user's personal details.
 */
class PersonalDetails implements \JsonSerializable
{
    public function __construct(
        /** First name of the user written in English; 1-255 characters */
        #[SerializedName('first_name')]
        private string $firstName,
        /** Middle name of the user written in English; 0-255 characters */
        #[SerializedName('middle_name')]
        private string $middleName,
        /** Last name of the user written in English; 1-255 characters */
        #[SerializedName('last_name')]
        private string $lastName,
        /** Native first name of the user; 1-255 characters */
        #[SerializedName('native_first_name')]
        private string $nativeFirstName,
        /** Native middle name of the user; 0-255 characters */
        #[SerializedName('native_middle_name')]
        private string $nativeMiddleName,
        /** Native last name of the user; 1-255 characters */
        #[SerializedName('native_last_name')]
        private string $nativeLastName,
        /** Birthdate of the user */
        #[SerializedName('birthdate')]
        private Date|null $birthdate = null,
        /** Gender of the user, "male" or "female" */
        #[SerializedName('gender')]
        private string $gender,
        /** A two-letter ISO 3166-1 alpha-2 country code of the user's country */
        #[SerializedName('country_code')]
        private string $countryCode,
        /** A two-letter ISO 3166-1 alpha-2 country code of the user's residence country */
        #[SerializedName('residence_country_code')]
        private string $residenceCountryCode,
    ) {
    }

    /**
     * Get First name of the user written in English; 1-255 characters.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set First name of the user written in English; 1-255 characters.
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get Middle name of the user written in English; 0-255 characters.
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * Set Middle name of the user written in English; 0-255 characters.
     */
    public function setMiddleName(string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get Last name of the user written in English; 1-255 characters.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set Last name of the user written in English; 1-255 characters.
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get Native first name of the user; 1-255 characters.
     */
    public function getNativeFirstName(): string
    {
        return $this->nativeFirstName;
    }

    /**
     * Set Native first name of the user; 1-255 characters.
     */
    public function setNativeFirstName(string $nativeFirstName): self
    {
        $this->nativeFirstName = $nativeFirstName;

        return $this;
    }

    /**
     * Get Native middle name of the user; 0-255 characters.
     */
    public function getNativeMiddleName(): string
    {
        return $this->nativeMiddleName;
    }

    /**
     * Set Native middle name of the user; 0-255 characters.
     */
    public function setNativeMiddleName(string $nativeMiddleName): self
    {
        $this->nativeMiddleName = $nativeMiddleName;

        return $this;
    }

    /**
     * Get Native last name of the user; 1-255 characters.
     */
    public function getNativeLastName(): string
    {
        return $this->nativeLastName;
    }

    /**
     * Set Native last name of the user; 1-255 characters.
     */
    public function setNativeLastName(string $nativeLastName): self
    {
        $this->nativeLastName = $nativeLastName;

        return $this;
    }

    /**
     * Get Birthdate of the user.
     */
    public function getBirthdate(): Date|null
    {
        return $this->birthdate;
    }

    /**
     * Set Birthdate of the user.
     */
    public function setBirthdate(Date|null $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get Gender of the user, "male" or "female".
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Set Gender of the user, "male" or "female".
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code of the user's country.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code of the user's country.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code of the user's residence country.
     */
    public function getResidenceCountryCode(): string
    {
        return $this->residenceCountryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code of the user's residence country.
     */
    public function setResidenceCountryCode(string $residenceCountryCode): self
    {
        $this->residenceCountryCode = $residenceCountryCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'personalDetails',
            'first_name' => $this->getFirstName(),
            'middle_name' => $this->getMiddleName(),
            'last_name' => $this->getLastName(),
            'native_first_name' => $this->getNativeFirstName(),
            'native_middle_name' => $this->getNativeMiddleName(),
            'native_last_name' => $this->getNativeLastName(),
            'birthdate' => $this->getBirthdate(),
            'gender' => $this->getGender(),
            'country_code' => $this->getCountryCode(),
            'residence_country_code' => $this->getResidenceCountryCode(),
        ];
    }
}
