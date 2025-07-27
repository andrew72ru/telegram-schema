<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a code to the specified phone number. Aborts previous phone number verification if there was one. On success, returns information about the sent code.
 */
class SendPhoneNumberCode extends AuthenticationCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** The phone number, in international format */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Settings for the authentication of the user's phone number; pass null to use default settings */
        #[SerializedName('settings')]
        private PhoneNumberAuthenticationSettings|null $settings = null,
        /** Type of the request for which the code is sent */
        #[SerializedName('type')]
        private PhoneNumberCodeType|null $type = null,
    ) {
    }

    /**
     * Get The phone number, in international format.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set The phone number, in international format.
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Settings for the authentication of the user's phone number; pass null to use default settings.
     */
    public function getSettings(): PhoneNumberAuthenticationSettings|null
    {
        return $this->settings;
    }

    /**
     * Set Settings for the authentication of the user's phone number; pass null to use default settings.
     */
    public function setSettings(PhoneNumberAuthenticationSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get Type of the request for which the code is sent.
     */
    public function getType(): PhoneNumberCodeType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the request for which the code is sent.
     */
    public function setType(PhoneNumberCodeType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendPhoneNumberCode',
            'phone_number' => $this->getPhoneNumber(),
            'settings' => $this->getSettings(),
            'type' => $this->getType(),
        ];
    }
}
