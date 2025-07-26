<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains settings for the authentication of the user's phone number
 */
class PhoneNumberAuthenticationSettings implements \JsonSerializable
{
    public function __construct(
        /** Pass true if the authentication code may be sent via a flash call to the specified phone number */
        #[SerializedName('allow_flash_call')]
        private bool $allowFlashCall,
        /** Pass true if the authentication code may be sent via a missed call to the specified phone number */
        #[SerializedName('allow_missed_call')]
        private bool $allowMissedCall,
        /** Pass true if the authenticated phone number is used on the current device */
        #[SerializedName('is_current_phone_number')]
        private bool $isCurrentPhoneNumber,
        /** Pass true if there is a SIM card in the current device, but it is not possible to check whether phone number matches */
        #[SerializedName('has_unknown_phone_number')]
        private bool $hasUnknownPhoneNumber,
        /** For official applications only. True, if the application can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details */
        #[SerializedName('allow_sms_retriever_api')]
        private bool $allowSmsRetrieverApi,
        /** For official Android and iOS applications only; pass null otherwise. Settings for Firebase Authentication */
        #[SerializedName('firebase_authentication_settings')]
        private FirebaseAuthenticationSettings|null $firebaseAuthenticationSettings = null,
        /** List of up to 20 authentication tokens, recently received in updateOption("authentication_token") in previously logged out sessions; for setAuthenticationPhoneNumber only */
        #[SerializedName('authentication_tokens')]
        private array|null $authenticationTokens = null,
    ) {
    }

    /**
     * Get Pass true if the authentication code may be sent via a flash call to the specified phone number
     */
    public function getAllowFlashCall(): bool
    {
        return $this->allowFlashCall;
    }

    /**
     * Set Pass true if the authentication code may be sent via a flash call to the specified phone number
     */
    public function setAllowFlashCall(bool $allowFlashCall): self
    {
        $this->allowFlashCall = $allowFlashCall;

        return $this;
    }

    /**
     * Get Pass true if the authentication code may be sent via a missed call to the specified phone number
     */
    public function getAllowMissedCall(): bool
    {
        return $this->allowMissedCall;
    }

    /**
     * Set Pass true if the authentication code may be sent via a missed call to the specified phone number
     */
    public function setAllowMissedCall(bool $allowMissedCall): self
    {
        $this->allowMissedCall = $allowMissedCall;

        return $this;
    }

    /**
     * Get Pass true if the authenticated phone number is used on the current device
     */
    public function getIsCurrentPhoneNumber(): bool
    {
        return $this->isCurrentPhoneNumber;
    }

    /**
     * Set Pass true if the authenticated phone number is used on the current device
     */
    public function setIsCurrentPhoneNumber(bool $isCurrentPhoneNumber): self
    {
        $this->isCurrentPhoneNumber = $isCurrentPhoneNumber;

        return $this;
    }

    /**
     * Get Pass true if there is a SIM card in the current device, but it is not possible to check whether phone number matches
     */
    public function getHasUnknownPhoneNumber(): bool
    {
        return $this->hasUnknownPhoneNumber;
    }

    /**
     * Set Pass true if there is a SIM card in the current device, but it is not possible to check whether phone number matches
     */
    public function setHasUnknownPhoneNumber(bool $hasUnknownPhoneNumber): self
    {
        $this->hasUnknownPhoneNumber = $hasUnknownPhoneNumber;

        return $this;
    }

    /**
     * Get For official applications only. True, if the application can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details
     */
    public function getAllowSmsRetrieverApi(): bool
    {
        return $this->allowSmsRetrieverApi;
    }

    /**
     * Set For official applications only. True, if the application can use Android SMS Retriever API (requires Google Play Services >= 10.2) to automatically receive the authentication code from the SMS. See https://developers.google.com/identity/sms-retriever/ for more details
     */
    public function setAllowSmsRetrieverApi(bool $allowSmsRetrieverApi): self
    {
        $this->allowSmsRetrieverApi = $allowSmsRetrieverApi;

        return $this;
    }

    /**
     * Get For official Android and iOS applications only; pass null otherwise. Settings for Firebase Authentication
     */
    public function getFirebaseAuthenticationSettings(): FirebaseAuthenticationSettings|null
    {
        return $this->firebaseAuthenticationSettings;
    }

    /**
     * Set For official Android and iOS applications only; pass null otherwise. Settings for Firebase Authentication
     */
    public function setFirebaseAuthenticationSettings(
        FirebaseAuthenticationSettings|null $firebaseAuthenticationSettings,
    ): self {
        $this->firebaseAuthenticationSettings = $firebaseAuthenticationSettings;

        return $this;
    }

    /**
     * Get List of up to 20 authentication tokens, recently received in updateOption("authentication_token") in previously logged out sessions; for setAuthenticationPhoneNumber only
     */
    public function getAuthenticationTokens(): array|null
    {
        return $this->authenticationTokens;
    }

    /**
     * Set List of up to 20 authentication tokens, recently received in updateOption("authentication_token") in previously logged out sessions; for setAuthenticationPhoneNumber only
     */
    public function setAuthenticationTokens(array|null $authenticationTokens): self
    {
        $this->authenticationTokens = $authenticationTokens;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'phoneNumberAuthenticationSettings',
            'allow_flash_call' => $this->getAllowFlashCall(),
            'allow_missed_call' => $this->getAllowMissedCall(),
            'is_current_phone_number' => $this->getIsCurrentPhoneNumber(),
            'has_unknown_phone_number' => $this->getHasUnknownPhoneNumber(),
            'allow_sms_retriever_api' => $this->getAllowSmsRetrieverApi(),
            'firebase_authentication_settings' => $this->getFirebaseAuthenticationSettings(),
            'authentication_tokens' => $this->getAuthenticationTokens(),
        ];
    }
}
