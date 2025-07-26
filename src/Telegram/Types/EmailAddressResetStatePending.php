<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Email address reset has already been requested. Call resetAuthenticationEmailAddress to check whether immediate reset is possible
 */
class EmailAddressResetStatePending extends EmailAddressResetState implements \JsonSerializable
{
    public function __construct(
        /** Left time before the email address will be reset, in seconds. updateAuthorizationState is not sent when this field changes */
        #[SerializedName('reset_in')]
        private int $resetIn,
    ) {
    }

    /**
     * Get Left time before the email address will be reset, in seconds. updateAuthorizationState is not sent when this field changes
     */
    public function getResetIn(): int
    {
        return $this->resetIn;
    }

    /**
     * Set Left time before the email address will be reset, in seconds. updateAuthorizationState is not sent when this field changes
     */
    public function setResetIn(int $resetIn): self
    {
        $this->resetIn = $resetIn;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emailAddressResetStatePending',
            'reset_in' => $this->getResetIn(),
        ];
    }
}
