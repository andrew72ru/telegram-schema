<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A digit-only authentication code is delivered via Firebase Authentication to the official Android application
 */
class AuthenticationCodeTypeFirebaseAndroid extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** Parameters to be used for device verification */
        #[SerializedName('device_verification_parameters')]
        private FirebaseDeviceVerificationParameters|null $deviceVerificationParameters = null,
        /** Length of the code */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get Parameters to be used for device verification
     */
    public function getDeviceVerificationParameters(): FirebaseDeviceVerificationParameters|null
    {
        return $this->deviceVerificationParameters;
    }

    /**
     * Set Parameters to be used for device verification
     */
    public function setDeviceVerificationParameters(
        FirebaseDeviceVerificationParameters|null $deviceVerificationParameters,
    ): self {
        $this->deviceVerificationParameters = $deviceVerificationParameters;

        return $this;
    }

    /**
     * Get Length of the code
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Length of the code
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeFirebaseAndroid',
            'device_verification_parameters' => $this->getDeviceVerificationParameters(),
            'length' => $this->getLength(),
        ];
    }
}
