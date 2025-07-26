<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends Firebase Authentication SMS to the phone number of the user. Works only when the current authorization state is authorizationStateWaitCode and the server returned code of the type authenticationCodeTypeFirebaseAndroid or authenticationCodeTypeFirebaseIos
 */
class SendAuthenticationFirebaseSms extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Play Integrity API or SafetyNet Attestation API token for the Android application, or secret from push notification for the iOS application */
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    /**
     * Get Play Integrity API or SafetyNet Attestation API token for the Android application, or secret from push notification for the iOS application
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Set Play Integrity API or SafetyNet Attestation API token for the Android application, or secret from push notification for the iOS application
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendAuthenticationFirebaseSms',
            'token' => $this->getToken(),
        ];
    }
}
