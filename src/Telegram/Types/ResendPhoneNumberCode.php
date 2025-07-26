<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends the authentication code sent to a phone number. Works only if the previously received authenticationCodeInfo next_code_type was not null and the server-specified timeout has passed
 */
class ResendPhoneNumberCode extends AuthenticationCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** Reason of code resending; pass null if unknown */
        #[SerializedName('reason')]
        private ResendCodeReason|null $reason = null,
    ) {
    }

    /**
     * Get Reason of code resending; pass null if unknown
     */
    public function getReason(): ResendCodeReason|null
    {
        return $this->reason;
    }

    /**
     * Set Reason of code resending; pass null if unknown
     */
    public function setReason(ResendCodeReason|null $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendPhoneNumberCode',
            'reason' => $this->getReason(),
        ];
    }
}
