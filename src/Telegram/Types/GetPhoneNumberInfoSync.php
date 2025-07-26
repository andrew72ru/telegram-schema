<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a phone number by its prefix synchronously. getCountries must be called at least once after changing localization to the specified language if properly localized country information is expected. Can be called synchronously
 */
class GetPhoneNumberInfoSync extends PhoneNumberInfo implements \JsonSerializable
{
    public function __construct(
        /** A two-letter ISO 639-1 language code for country information localization */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** The phone number prefix */
        #[SerializedName('phone_number_prefix')]
        private string $phoneNumberPrefix,
    ) {
    }

    /**
     * Get A two-letter ISO 639-1 language code for country information localization
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code for country information localization
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get The phone number prefix
     */
    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    /**
     * Set The phone number prefix
     */
    public function setPhoneNumberPrefix(string $phoneNumberPrefix): self
    {
        $this->phoneNumberPrefix = $phoneNumberPrefix;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPhoneNumberInfoSync',
            'language_code' => $this->getLanguageCode(),
            'phone_number_prefix' => $this->getPhoneNumberPrefix(),
        ];
    }
}
