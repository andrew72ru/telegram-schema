<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains basic information about another user that started a chat with the current user.
 */
class AccountInfo implements \JsonSerializable
{
    public function __construct(
        /** Month when the user was registered in Telegram; 0-12; may be 0 if unknown */
        #[SerializedName('registration_month')]
        private int $registrationMonth,
        /** Year when the user was registered in Telegram; 0-9999; may be 0 if unknown */
        #[SerializedName('registration_year')]
        private int $registrationYear,
        /** A two-letter ISO 3166-1 alpha-2 country code based on the phone number of the user; may be empty if unknown */
        #[SerializedName('phone_number_country_code')]
        private string $phoneNumberCountryCode,
        /** Point in time (Unix timestamp) when the user changed name last time; 0 if unknown */
        #[SerializedName('last_name_change_date')]
        private int $lastNameChangeDate,
        /** Point in time (Unix timestamp) when the user changed photo last time; 0 if unknown */
        #[SerializedName('last_photo_change_date')]
        private int $lastPhotoChangeDate,
    ) {
    }

    /**
     * Get Month when the user was registered in Telegram; 0-12; may be 0 if unknown.
     */
    public function getRegistrationMonth(): int
    {
        return $this->registrationMonth;
    }

    /**
     * Set Month when the user was registered in Telegram; 0-12; may be 0 if unknown.
     */
    public function setRegistrationMonth(int $registrationMonth): self
    {
        $this->registrationMonth = $registrationMonth;

        return $this;
    }

    /**
     * Get Year when the user was registered in Telegram; 0-9999; may be 0 if unknown.
     */
    public function getRegistrationYear(): int
    {
        return $this->registrationYear;
    }

    /**
     * Set Year when the user was registered in Telegram; 0-9999; may be 0 if unknown.
     */
    public function setRegistrationYear(int $registrationYear): self
    {
        $this->registrationYear = $registrationYear;

        return $this;
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code based on the phone number of the user; may be empty if unknown.
     */
    public function getPhoneNumberCountryCode(): string
    {
        return $this->phoneNumberCountryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code based on the phone number of the user; may be empty if unknown.
     */
    public function setPhoneNumberCountryCode(string $phoneNumberCountryCode): self
    {
        $this->phoneNumberCountryCode = $phoneNumberCountryCode;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user changed name last time; 0 if unknown.
     */
    public function getLastNameChangeDate(): int
    {
        return $this->lastNameChangeDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user changed name last time; 0 if unknown.
     */
    public function setLastNameChangeDate(int $lastNameChangeDate): self
    {
        $this->lastNameChangeDate = $lastNameChangeDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user changed photo last time; 0 if unknown.
     */
    public function getLastPhotoChangeDate(): int
    {
        return $this->lastPhotoChangeDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user changed photo last time; 0 if unknown.
     */
    public function setLastPhotoChangeDate(int $lastPhotoChangeDate): self
    {
        $this->lastPhotoChangeDate = $lastPhotoChangeDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'accountInfo',
            'registration_month' => $this->getRegistrationMonth(),
            'registration_year' => $this->getRegistrationYear(),
            'phone_number_country_code' => $this->getPhoneNumberCountryCode(),
            'last_name_change_date' => $this->getLastNameChangeDate(),
            'last_photo_change_date' => $this->getLastPhotoChangeDate(),
        ];
    }
}
