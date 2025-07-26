<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The code is re-sent, because device verification has failed
 */
class ResendCodeReasonVerificationFailed extends ResendCodeReason implements \JsonSerializable
{
    public function __construct(
        /** Cause of the verification failure, for example, "PLAY_SERVICES_NOT_AVAILABLE", "APNS_RECEIVE_TIMEOUT", or "APNS_INIT_FAILED" */
        #[SerializedName('error_message')]
        private string $errorMessage,
    ) {
    }

    /**
     * Get Cause of the verification failure, for example, "PLAY_SERVICES_NOT_AVAILABLE", "APNS_RECEIVE_TIMEOUT", or "APNS_INIT_FAILED"
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * Set Cause of the verification failure, for example, "PLAY_SERVICES_NOT_AVAILABLE", "APNS_RECEIVE_TIMEOUT", or "APNS_INIT_FAILED"
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendCodeReasonVerificationFailed',
            'error_message' => $this->getErrorMessage(),
        ];
    }
}
