<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the phone number of the user and sends an authentication code to the user. Works only when the current authorization state is authorizationStateWaitPhoneNumber,
 */
class SetAuthenticationPhoneNumber extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The phone number of the user, in international format */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Settings for the authentication of the user's phone number; pass null to use default settings */
        #[SerializedName('settings')]
        private PhoneNumberAuthenticationSettings|null $settings = null,
    ) {
    }

    /**
     * Get The phone number of the user, in international format
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set The phone number of the user, in international format
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Settings for the authentication of the user's phone number; pass null to use default settings
     */
    public function getSettings(): PhoneNumberAuthenticationSettings|null
    {
        return $this->settings;
    }

    /**
     * Set Settings for the authentication of the user's phone number; pass null to use default settings
     */
    public function setSettings(PhoneNumberAuthenticationSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAuthenticationPhoneNumber',
            'phone_number' => $this->getPhoneNumber(),
            'settings' => $this->getSettings(),
        ];
    }
}
