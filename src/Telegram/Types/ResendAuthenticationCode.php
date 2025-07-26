<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends an authentication code to the user. Works only when the current authorization state is authorizationStateWaitCode, the next_code_type of the result is not null
 */
class ResendAuthenticationCode extends Ok implements \JsonSerializable
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
            '@type' => 'resendAuthenticationCode',
            'reason' => $this->getReason(),
        ];
    }
}
